<?php 
namespace App\Models;


use DB;

class Game {

    public $id;
    public $name;
    public $year;

    /*******************************
     * Save (Call Insert or Edit)
     *******************************/
    public function save() {

        if (empty($this->id)) {
            $this->insert();
        } else {
            $this->edit();
        }

    }

    /*******************************
     * Create
     *******************************/
    private function insert() {

        // SQL
        $sql = "
            INSERT INTO game (name, year)
            VALUES (:name, :year)
            ";

        // Execute
        DB::insert($sql,["name"=>$this->name,"year"=>$this->year]);

    }

    /*******************************
     * Update User
     *******************************/
    private function edit() {
        
        // SQL
        $sql = "
            UPDATE game SET 
            name = :name, year = :year
            WHERE id = :id";

        // Execute
        DB::insert($sql,["id"=>$this->id,"name"=>$this->name,"year"=>$this->year]);

    }

    /*******************************
     * Delete
     *******************************/
    public static function delete($id) {

        // SQL
        $sql = "
            DELETE from game
            where id = :id";

        // Execute
        $row = DB::delete($sql, ['id'=>$id]);

    }


    /*******************************
     * Get Game
     *******************************/
    public static function get($id) {

        // SQL
        $sql = "
            SELECT *
            FROM game
            WHERE id = :id";

        // Execute
        $row = DB::selectOne($sql, ['id'=>$id]);

        return Game::createGameFromRow($row);

    }

    /*******************************
     * Get All Game
     *******************************/
    public static function getAll() {
        
        // SQL
        $sql = "
            SELECT *
            FROM game";

        // Execute
        $rows = DB::select($sql);

        $games = [];

        foreach($rows as $row) {

            $games[] = Game::createGameFromRow($row);

        }

        return $games;

    }

    /*******************************
     * Create Game From Row
     *******************************/
    public static function createGameFromRow($row) {

        $game = new Game();

        $game->id = $row->id;
        $game->name = $row->name;
        $game->year = $row->year;

        $games[] = $game;

        return $game;

    }

}