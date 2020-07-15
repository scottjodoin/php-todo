<?php

$name = filter_var( $_POST['name'], FILTER_SANITIZE_STRING);

$app['database']->insert('names',
  ['name' => $name]
);

header('Location: /');
