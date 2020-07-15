<?php
$title = "Todo";

$tasks = $app['database']->selectAll('todos');

require 'views/index.view.php';
