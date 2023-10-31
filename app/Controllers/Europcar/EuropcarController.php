<?php

namespace App\Controllers\Europcar;

use App\Controllers\BaseController;
class EuropcarController extends BaseController
{

  public function index()
  {
    return view("europcar/index");
  }
}
