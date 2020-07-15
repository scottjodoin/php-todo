<?php
$title = "Home";

$names = array_column(
  App::get('database')->selectAll('names'),
  'name'
);

require 'views/index.view.php';
