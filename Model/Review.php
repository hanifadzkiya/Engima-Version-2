<?php
require_once __DIR__ .'/../Database.php';

Class Review extends Database
{
    private $dbname = "engima";
    private $tablename = "review";

    function __construct()
    {
        parent::__construct();
        $this->connect($this->dbname);
    }

    public function createTable()
    {
        if(!$this->isTableExist($this->tablename)) {
            $sql = "CREATE TABLE ". $this->tablename . " (
				id varchar(255) PRIMARY KEY,
				user_id VARCHAR(255) NOT NULL,
				film_id VARCHAR(255) NOT NULL,
				review MEDIUMTEXT NOT NULL,
				rating INT NOT NULL,
				FOREIGN KEY (user_id) REFERENCES user(id),
				FOREIGN KEY (film_id) REFERENCES film(id)
				)";
            if ($this->runQuery($sql) === true) {
                echo "Table created successfully\n";
            } else {
                echo "Error creating table : " . $this->getConn()->error;
            }
        } else {
            echo "Table is already exist\n";
        }
    }

    public function add($user_id,$film_id,$review,$rating)
    {
        $sql = "INSERT INTO ". $this->tablename . " (id, user_id, film_id, review, rating) VALUES ('" . $this->getUUID() . "','".$user_id. "','".$film_id. "','".$review. "','".$rating."')";
        return ($this->runQuery($sql) === true);
    }

    public function update($user_id,$film_id,$review,$rating)
    {
        $sql = "UPDATE ". $this->tablename . " SET review = '".$review."', rating = '".$rating."' WHERE user_id = '".$user_id."' AND film_id = '".$film_id."'";
        return ($this->runQuery($sql) === true);
    }

    public function getByFilmId($film_id)
    {
        $sql = "SELECT * FROM ". $this->tablename . " WHERE film_id='" . $film_id . "'";
        return $this->runQuery($sql);
    }

    public function getByFilmAndUser($user_id,$film_id)
    {
        $sql = "SELECT * FROM ". $this->tablename . " WHERE film_id='" . $film_id . "' AND user_id='".$user_id."'";
        return $this->runQuery($sql); 
    }

    public function delete($user_id,$film_id)
    {
        $sql = "DELETE FROM ".$this->tablename." WHERE user_id='".$user_id."'&film_id='".$film_id."'";
        return ($this->runQuery($sql) === true);
    }

}