<?php

namespace App\Mooks;

class TWaivers
{

  public string $waiverId;
  public string $waiverName;
  public int|float $basePrice;
  public string $bookedType;
  public int $totalPrice;

  public function __construct(
    string $waiverId,
    string $waiverName,
    int|float $basePrice,
    string $bookedType,
    int $totalPrice
  ) {

    $this->waiverId = $waiverId;
    $this->waiverName = $waiverName;
    $this->basePrice = $basePrice;
    $this->bookedType = $bookedType;
    $this->totalPrice = $totalPrice;
  }
}
