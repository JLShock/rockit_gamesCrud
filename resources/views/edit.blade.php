<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Game</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav><a href="/games">HOME</a>
	<h1>Edit Game</h1>
	<form action="/games/{{ $game->id }}/edit" method="POST">

		<input type="hidden" value="{{ csrf_token() }}" name="_token">

		<label>Name:</label><br>
	        <input type="text" name="name" value="{{ $game->name }}">
	    <br> <br>
		<label>Year:</label><br>
	        <input type="text" name="year" value="{{ $game->year }}">
	    <br> <br>
		<button type="submit" name="update">Update</button>

	</form>
</body>
</html>