<?php

require 'functions.php';
require 'Task.php';

$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);

include 'index.view.php';
