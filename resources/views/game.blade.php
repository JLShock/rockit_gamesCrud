<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Game</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav><a href="/games">HOME</a>
	<h1>View Game</h1>
	<p><strong>ID:</strong> {{ $game->id }}</p>
	<p><strong>Name:</strong> {{ $game->name }}</p>
	<p><strong>Year:</strong> {{ $game->year }}</p>
	<p><a class="edit" href="/games/{{ $game->id }}/edit">Edit</a> <a class="delete" href="/games/{{ $game->id }}/delete">Delete</a></p>
</body>
</html>