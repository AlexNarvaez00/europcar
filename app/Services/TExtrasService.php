<?php

namespace App\Services;

use App\Mooks\TExtras;

class TExtrasService
{


  /**
   * @param array $data
   * @return array<TExtras>
   */
  public static function fromArray(array $data): array
  {
    return array_map(function ($value){
      return new TExtras(
        $value["ExtraId"],
        $value["ExtraName"],
        $value["BasePrice"],
        $value["BookedUnits"],
        $value["TotalPrice"],
        $value["BookedType"],
        $value["Status"]
      );
    }, $data);
  }
}
