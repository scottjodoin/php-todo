<?php

namespace App\Controllers;

class PagesController
{
  public function home()
  {
    return view('index', ['title' => "Home"]);
  }

  public function about()
  {
    $company = 'Scott Jodoin Inc';

    return view('about', ['company'=>$company, 'title' => "About"]);
  }

  public function contact()
  {
    return view('contact',  ['title' => "Contact Us"]);
  }
}
