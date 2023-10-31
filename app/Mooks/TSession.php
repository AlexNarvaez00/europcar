<?php

namespace App\Mooks;

class TSession
{

  public string $sessionId;
  public string $contractId;
  public int $companyId;
  public string $companyName;
  public TTariff $tariff;
  public int $privilegeCustomer;
  public bool $sesseionPrivilege;

  public function __construct(

    string $sessionId,
    string $contractId,
    int $companyId,
    string $companyName,
    TTariff $tariff,
    int $privilegeCustomer,
    bool $sesseionPrivilege
  ) {

    $this->sessionId = $sessionId;
    $this->contractId = $contractId;
    $this->companyId = $companyId;
    $this->companyName = $companyName;
    $this->tariff = $tariff;
    $this->privilegeCustomer = $privilegeCustomer;
    $this->sesseionPrivilege = $sesseionPrivilege;
  }
}
