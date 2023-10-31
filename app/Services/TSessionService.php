<?php

namespace App\Services;

use App\Mooks\TSession;

class TSessionService
{

  /**
   * @param string $contractId
   * @param string $password
   * @return TSession
   */
  public static function logIn(string $contractId, string $password): TSession
  {
    $res =  HttpService::build()
      ->post("https://www.europcar.com.mx/ejercicio/rest/")
      ->setBody([
        "Function" => "LogIn",
        "ContractId" => "0123456789",
        "Password" => "0123456789",
        "LanguageId" => "ES"
      ])
      ->run();

    return TSessionService::fromJSON($res);
  }

  /**
   * @param string $json
   * @return TSession
   */
  public static function fromJSON(string $json): TSession
  {
    $data = json_decode($json, true);
    return new TSession(
      $data["SessionId"],
      $data["ContractId"],
      $data["CompanyId"],
      $data["CompanyName"],
      TTariffService::fromArray([$data["Tariff"]])[0],
      $data["PrivilegeCustomer"],
      $data["SesseionPrivilege"],
    );
  }
}
