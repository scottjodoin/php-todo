<?php require('partials/head.php'); ?>
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
<?php require('partials/footer.php'); ?>
