<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All Games</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav><a href="/games">HOME</a>
	<h1>All Games</h1>
	<table>
	    <tr>
	        <th>ID</th>
	        <th>Name</th>
	        <th>Year</th>
	        <th>Edit</th>
	        <th>Delete</th>
	    </tr>
	    @foreach($games as $game)
	    <tr>
	        <td><a href="games/{{ $game->id }}">{{ $game->id }}</a></td>
	        <td>{{ $game->name }}</td>
	        <td>{{ $game->year }}</td>
	        <td><a class="edit" href="games/{{ $game->id }}/edit">Edit</a></td>
	        <td><a class="delete" href="games/{{ $game->id }}/delete">Delete</a></td>
	    </tr>
	    @endforeach
	</table>
	<br>
	<div>
	    <a class="create" href="/games/create">+ Create New Game</a>
	</div>
</body>
</html>