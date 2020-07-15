<?php

use App\Core\App;
use App\Core\Database\{QueryBuilder, Connection};

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'] )
  ));


function view($name, $data = [])
{
  extract($data); // Converts hash to explicitly named variables

  return require "app/views/{$name}.view.php";
}

function redirect($path){
  header("Location: /{$path}");
}
