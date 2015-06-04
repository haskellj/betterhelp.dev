<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
</head>
<body>
	<ul>
		@foreach($questions as $question)
			@if($question->type != 'sex')
				<h3><li>{{{$question->question}}}</li></h3>
				@if(!empty($male[$question->id]))
					<h5>Most Common Male Response: {{{ $male[$question->id]->answer }}}</h5>
				@else
					<h5>No male responses yet.</h5>
				@endif
				@if(!empty($female[$question->id]))
					<h5>Most Common Female Response: {{{ $female[$question->id]->answer }}}</h5>
				@else
					<h5>No female responses yet.</h5>
				@endif
			@endif
		@endforeach
	</ul>
</body>
</html>