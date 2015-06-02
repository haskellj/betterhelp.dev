<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
</head>
<body>
	<ol>
		@foreach($questions as $question)
			<h3><li>{{{$question->question}}}</li></h3>
			<h5>Most Common Male Response: {{{ $male3->answer }}}</h5>
			<h5>Most Common Female Response: {{{ $female3->answer }}}</h5>
		@endforeach
	</ol>
</body>
</html>