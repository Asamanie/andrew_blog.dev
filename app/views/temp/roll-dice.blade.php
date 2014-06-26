<!doctype html>
<html lang="en">
<head>
    <title>Random number between 1-6</title>
</head>
<body>

    <h1>The random number was: {{{$random}}} </h1><br> 
    <h2>Your guess was: {{{$guess}}} <h2><br>

	@if ($random == $guess)
		<p style="color:green;"> Your Guess was correct!</p>
	@else
		<p style="color:red;">Sorry, please try again!</P>
	@endif		
</body>
</html>
