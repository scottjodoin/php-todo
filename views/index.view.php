<?php include 'views/partials/head.php' ?>
    <?php include 'views/partials/nav.php' ?>
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
<?php include 'views/partials/footer.php' ?>
