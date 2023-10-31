<?php

namespace App\Services;

use App\Mooks\TTariff;
use App\Services\TExtrasService;

class TTariffService
{


  /**
   * @param array $data
   * @return array<TTariff>
   */
  public static function fromArray(array $data): array
  {
    return array_map(function ($value) {
      return new TTariff(
        $value["TariffId"],
        $value["Currency"],
        $value["UnlKmIncluded"],
        $value["VatIncluded"],
        $value["AfIncluded"],
        TWaiversService::fromArray($value["Waivers"]),
        TExtrasService::fromArray($value["Extras"]),
        $value["DropOff"],
      );
    }, $data);
  }
}
