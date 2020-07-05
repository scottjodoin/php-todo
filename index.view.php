<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Todo List</title>
  </head>
  <body>
    <table>
      <tr>
        <th>Task</th>
        <th>Complete</th>
      </tr>

      <?php foreach($tasks as $task): ?>
        <tr>
          <td><?= $task->getDescription() ?></td>
          <td>
            <input type="checkbox" disabled="disabled" <?= $task->isComplete() ?>>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>
