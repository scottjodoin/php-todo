<h1>All Users</h2>
<?php foreach ($names as $name) : ?>
  <li><?=$name ?></li>
<?php endforeach ?>

<h2>Submit Your Name</h2>

<form class="" action="/users" method="POST">
  <input name="name"></input>
  <button type="submit">Submit</button>
</form>
