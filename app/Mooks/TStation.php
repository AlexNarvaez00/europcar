<?php

namespace App\Mooks;

class TStation
{

  public int $stationId;
  public string $stationName;
  public string $address;
  public string $postalCode;
  public string $cityName;
  public string $state;
  public string $telephone;
  public string $openTime;
  public float|int $latitude;
  public float|int $length;
  public string $location;

  public function __construct(

    int $stationId,
    string $stationName,
    string $address,
    string $postalCode,
    string $cityName,
    string $state,
    string $telephone,
    string $openTime,
    float|int $latitude,
    float|int $length,
    string $location
  ) {

    $this->stationId = $stationId;
    $this->stationName = $stationName;
    $this->address = $address;
    $this->postalCode = $postalCode;
    $this->cityName = $cityName;
    $this->state = $state;
    $this->telephone = $telephone;
    $this->openTime = $openTime;
    $this->latitude = $latitude;
    $this->length = $length;
    $this->location = $location;
  }
}
