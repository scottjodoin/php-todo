<?php

function dump_and_die($data)
{
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}

function connectToDb()
{
  try {
    return $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
  }
  catch (PDOException $e)
  {
    die('Could not connect');
  }
}

function fetchAllTasks ($pdo)
{
  $statement = $pdo->prepare('select * from todos');

  $statement->execute();


  /* FETCH_OBJ is optional, but removes useless information. FETCH_CLASS is an
   * alternative
   * #fetch also possible.
   */
  return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}
