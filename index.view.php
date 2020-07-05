<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Todo List</title>
  </head>
  <body>
    <h1>TODO:</h1>
    <ul>
      <?php foreach($tasks as $task): ?>
        <li>
          <?php if ($task->completed)
            echo "<strike>" ?>
            <?= $task->description ?>
          <?php if ($task->completed)
            echo "</strike>" ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
