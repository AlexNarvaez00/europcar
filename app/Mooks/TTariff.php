<?php

namespace App\Mooks;

class TTariff
{

  public int $tariffId;
  public string $currency;
  public bool $unlKmIncluded;
  public bool $vatIncluded;
  public bool $afIncluded;
  /** @var array<TWaivers> */
  public array $waivers;
  /** @var array<TExtras> */
  public array $extras;
  public bool $dropOff;

  /**
   * @param array<TWaivers> $waivers
   * @param array<TExtras> $extras
   */
  public function __construct(

    int $tariffId,
    string $currency,
    bool $unlKmIncluded,
    bool $vatIncluded,
    bool $afIncluded,
    array $waivers,
    array $extras,
    bool $dropOff
  ) {

    $this->tariffId = $tariffId;
    $this->currency = $currency;
    $this->unlKmIncluded = $unlKmIncluded;
    $this->vatIncluded = $vatIncluded;
    $this->afIncluded = $afIncluded;
    $this->waivers = $waivers;
    $this->extras = $extras;
    $this->dropOff = $dropOff;
  }
}
