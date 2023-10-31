<?php

namespace App\Services;

use App\Mooks\TStation;

class TStationService
{


  /**
   * @param string $sessionId
   * @param string $stationType
   * @return array<TStation>
   */
  public static function findManyTStations(string $sessionId, string $stationType = "CheckIn"): array
  {
    $listStation = HttpService::build()
      ->post("https://www.europcar.com.mx/ejercicio/rest/")
      ->setBody([
        "SessionId" => $sessionId,
        "Function" => "GetStationList",
        "StationType" => $stationType
      ])->run();
    return self::fromArray(json_decode($listStation, true));
  }

  /**
   * @param array $data
   * @return array<TStation>
   */
  public static function fromArray(array $data): array
  {
    $array = array_map(function ($value) {
      return new TStation(
        $value["StationId"],
        $value["StationName"],
        $value["Address"],
        $value["PostalCode"],
        $value["CityName"],
        $value["State"],
        $value["Telephone"],
        $value["OpenTime"],
        $value["Latitude"],
        $value["Length"],
        $value["Location"]
      );
    }, $data);
    return $array;
  }
}
