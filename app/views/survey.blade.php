<!DOCTYPE html>
<html>
<head>
	<title>Survey</title>
</head>
<body>
	<form method="POST" action="/results/survey">
		<ol>
			@foreach($questions as $question)
				<h3><li>{{{$question->question}}}</li></h3>
				@foreach($answers as $answer)
					@if($answer->question_id == $question->id)
						@if($question->multiple_answers == 0)
							<input type='radio' id="{{{ $answer->answer }}}" name="{{{ $question->type }}}" value="{{{ $answer->answer }}}" />
						@else
							<input type='checkbox' id="{{{ $answer->answer }}}" name="{{{ $question->type }}}" value="{{{ $answer->answer }}}" />
						@endif
						<label for="{{{ $answer->answer }}}">{{{ $answer->answer }}}</label><br>
					@endif
				@endforeach
			@endforeach
		</ol>
		<input type="submit" value="Done">
		{{ Form::token() }}
	</form>
</body>
</html>