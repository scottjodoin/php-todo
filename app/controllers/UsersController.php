<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
  public function index ()
  {
    $names = array_column(
      App::get('database')->selectAll('names'),
      'name'
    );
    return view('users', [
      'names' => $names,
     'title' => 'All Users'
    ]);
  }

  public function store()
  {
    $name = filter_var( $_POST['name'], FILTER_SANITIZE_STRING);

    App::get('database')->insert('names',
      ['name' => $name]
    );

    return redirect('users');
  }
}
