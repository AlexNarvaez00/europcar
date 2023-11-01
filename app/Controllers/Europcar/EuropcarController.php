<?php

namespace App\Controllers\Europcar;

use App\Controllers\BaseController;
use App\Mooks\TStation;
use App\Services\TSessionService;
use App\Services\TStationService;

class EuropcarController extends BaseController
{

  public function index()
  {
    $session = TSessionService::logIn("0123456789", "0123456789");
    $stationList = TStationService::findManyTStations($session->sessionId);
    $stationListOut = TStationService::findManyTStations($session->sessionId, "CheckOut");

    return view("europcar/index", [
      "stationList" => $stationList,
      "stationListOut" => $stationListOut,
      "sessionId" => $session->sessionId
    ]);
  }

  /**
   * Esta funcion la iba a utiizar para hacer filtros de las oficinas de salida
   * @param string $cityName
   */
  public function getByStationId(int $stationId)
  {
    $sessionId = $this->request->getJSON(true)["sessionId"] ?? "";
    $allStation = TStationService::findManyTStations($sessionId, "CheckOut");
    $filterStation = array_filter(
      $allStation,
      function (TStation $tStation) use ($stationId) {
        return $tStation->stationId == $stationId;
      }
    );
    $cityName = array_reduce($filterStation, function ($carry,$tStation){
      return $tStation->cityName;
    }, "");

    $stationListOut = array_filter(
      $allStation,
      function (TStation $tStation) use ($cityName) {
        return strcmp($cityName, $tStation->cityName) == 0;
      }
    );
    return $this->response->setJSON(["stationListOut" => $stationListOut]);
  }
}
