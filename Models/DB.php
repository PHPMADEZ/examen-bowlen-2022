<?php

class Database {

    /*
    -- connects to the database
    - @return $pdo - the connection to the database
    */
    protected function connect() {
        try {

            $username = "root";
            $password = "";
            $db = new PDO('mysql:host=localhost;dbname=examen-2022-reservering', $username, $password);
            return $db;
        } 
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}
