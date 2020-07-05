<?php

require 'functions.php';

class Task {
  public $description;
  protected $completed = false;

  public function __construct($description) {
    $this->description = $description;
  }

  public function complete(){
    $this->completed = true;
  }

  public function isComplete(){
    return $this->completed ? 'checked' : '';
  }

}

$tasks = [
  new Task("Go to the store"),
  new Task("Eat a sandwich"),
  new Task("Learn some PHP")
];

try {


  $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo','root','');

} catch (PDOException $e) {

  die('Could not connect.');

}

$tasks[0]->complete();

include 'index.view.php';
