<?php

//$task = [
//
//	'title' => 'Finish homework',
//	'due' => 'today',
//	'assigned_to' => 'Kiara',
//	'completed' => true
//];

class Task {

    public $description;
    public $completed = false;

    public function __construct($description)
    {
        // automatically triggered on instantiation
        $this->description = $description;

    }

    public function isComplete()
    {
        return $this->completed;
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$tasks = [
    new Task('Go to the mall'),
    new Task('Clean my room'),
    new Task('Get books')

];

$tasks[0]->complete();

require 'index.view.php';