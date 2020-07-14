<?php

$query = require 'bootstrap.php';


$tasks = $query->selectAll('todos');

include 'index.view.php';
