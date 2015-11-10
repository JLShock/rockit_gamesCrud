<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create New Game</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav><a href="/games">HOME</a>
	<h1>Create New Game</h1>
	<form action="/games/create" method="POST">

		<input type="hidden" value="{{ csrf_token() }}" name="_token">

		<label>Name:</label><br>
	        <input type="text" name="name">
	    <br> <br>
		<label>Year:</label><br>
	        <input type="text" name="year">
	    <br> <br>
		<button type="submit" name="create">Create</button>

	</form>
</body>
</html>