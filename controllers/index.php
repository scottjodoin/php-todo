<?php
$title = "Home";

$names = array_column(
  $app['database']->selectAll('names'),
  'name'
);

require 'views/index.view.php';
