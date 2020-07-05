<?php

require 'Task.php';

//DSN
try {
  $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
} catch (PDOException $e){
  die('Could not connect');
}

$statement = $pdo->prepare('select * from todos');

$statement->execute();


/* FETCH_OBJ is optional, but removes useless information. FETCH_CLASS is an
 * alternative
 * #fetch also possible.
 */
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

include 'index.view.php';
