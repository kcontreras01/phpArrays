<?php

function connectToDb(){
    try {
       return $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'hashtagkiara');
    } catch (PDOexception $e) {
    	die($e->getMessage());
    }
}

function fetchAllTasks($pdo) {
    // prepared statement
    $statement = $pdo->prepare('select * from todos');
    //execute statement
    $statement->execute();
    // fetching results and save to variable or memory
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}

