<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller {

  protected $clientRequestIP;
  protected $clientUserAgent;

  public function initialize() {

      // Get Client Request IP Address
      $this->clientRequestIP = $this->request->getClientAddress();
      // Get Client User Agent
      $this->clientUserAgent = $this->request->getUserAgent();

  }

}
