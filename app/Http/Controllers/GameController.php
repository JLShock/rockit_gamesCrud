<?php namespace App\Http\Controllers;

use Request;
use App\Models\Game;

class GameController extends Controller {


	public function viewAll() {

		$games = Game::getAll();
		return view('games', ['games'=>$games]);

	}

	public function view($id) {

		$game = Game::get($id);
		return view('game', ['game'=>$game]);

	}

	public function create() {

		return view('create');

	}

	public function postCreate() {

		$game = new Game();
		$game->name = Request::input('name');
		$game->year = Request::input('year');
		$game->save();

		return redirect('games');

	}

	public function edit($id) {

		$game = Game::get($id);
		return view("edit", ['id'=>$id,'game'=>$game]);

	}

	public function postEdit($id) {

		$game = Game::get($id);

		$game->name = Request::input('name');
		$game->year = Request::input('year');
		$game->save();

		return redirect("games/{$game->id}");

	}

	public function delete($id) {

		$game = Game::delete($id);
		return redirect('games');

	}

}