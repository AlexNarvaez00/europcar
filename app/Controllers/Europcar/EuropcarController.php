<?php

namespace App\Controllers\Europcar;

use App\Controllers\BaseController;
use App\Services\HttpService;
use App\Services\TStationService;

class EuropcarController extends BaseController
{

  public function index()
  {
    $res =  HttpService::build()
      ->post("https://www.europcar.com.mx/ejercicio/rest/")
      ->setBody([
        "Function" => "LogIn",
        "ContractId" => "0123456789",
        "Password" => "0123456789",
        "LanguageId" => "ES"
      ])
      ->run();

    $data = json_decode($res, true);

    $listStation = HttpService::build()
      ->post("https://www.europcar.com.mx/ejercicio/rest/")
      ->setBody([
        "SessionId" => $data["SessionId"],
        "Function" => "GetStationList",
        "StationType" => "CheckOut"
      ])->run();
    dd( TStationService::fromArray(json_decode($listStation, true)));
  }
}
