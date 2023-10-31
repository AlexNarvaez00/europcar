<?php

namespace App\Services;

use App\Mooks\TWaivers;

class TWaiversService
{


  /**
   * @param array $data
   * @return array<TWaivers>
   */
  public static function fromArray(array $data): array
  {
    return array_map(function ($value) {
      return new TWaivers(
        $value["WaiverId"],
        $value["WaiverName"],
        $value["BasePrice"],
        $value["BookedType"],
        $value["TotalPrice"],
      );
    }, $data);
  }
}
