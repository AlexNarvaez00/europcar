<?php

namespace App\Services;

use Config\Services;

class HttpService
{


  private string $method;
  private array $body;
  private string $uri;

  /**
   * @param string $method
   * @param array $body
   * @param string $uri
   */
  private function __construct(string $method, array $body, string $uri)
  {
    $this->method = $method;
    $this->body = $body;
    $this->uri = $uri;
  }

  /**
   * @return HttpService
   */
  public static function build(): HttpService
  {
    return new self("GET", [], "");
  }

  /**
   * @paramstring $uri
   * @return HttpService
   */
  public function post(string $uri): HttpService
  {
    $this->method = "POST";
    $this->uri = $uri;
    return $this;
  }

  /**
   * @param array $body
   * @return HttpService   
   */
  public function setBody(array $body): HttpService
  {
    $this->body = $body;
    return $this;
  }

  /**
   * @return string
   */
  public function run(): string
  {
    $client = Services::curlrequest();
    $res = $client->request($this->method, $this->uri, [
      "body" => json_encode($this->body)
    ]);
    return $res->getBody();
  }
}
