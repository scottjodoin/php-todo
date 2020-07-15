<?php require('partials/head.php'); ?>

<h1>Names</h2>
<?php foreach ($names as $name) : ?>
  <li><?=$name ?></li>
<?php endforeach ?>

<h2>Submit Your Name</h2>

<form class="" action="/names" method="POST">
  <input name="name"></input>
  <button type="submit">Submit</button>
</form>

<?php require('partials/footer.php'); ?>
