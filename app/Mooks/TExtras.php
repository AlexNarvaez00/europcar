<?php

namespace App\Mooks;

class TExtras
{

  public string $extraId;
  public string $extraName;
  public int|float $basePrice;
  public int $bookedUnits;
  public int $totalPrice;
  public string $bookedType;
  public string $status;

  public function __construct(

    string $extraId,
    string $extraName,
    int|float $basePrice,
    int $bookedUnits,
    int $totalPrice,
    string $bookedType,
    string $status
  ) {

    $this->extraId = $extraId;
    $this->extraName = $extraName;
    $this->basePrice = $basePrice;
    $this->bookedUnits = $bookedUnits;
    $this->totalPrice = $totalPrice;
    $this->bookedType = $bookedType;
    $this->status = $status;
  }
}
