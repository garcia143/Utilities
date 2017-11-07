<?php

class ErrorsController extends ControllerBase {

  public function initialize() {
    parent::initialize();
  }

  public function notFoundAction() {


    // Getting Response
    $response = new \Phalcon\Http\Response();

    // Set Header Content Type to Json
    $response->setHeader("Content-Type", "application/json");

    // Json Response
    $response->setJsonContent(
      [
        "statusResp" => "OK",
        "errCode"    => "1",
        "errTxt"     => "Invalid or Missing Parameters."
      ]
    );

    // Send Response
    $response->send();

    // Logging
    $this->logger->error('IP Address '.$this->clientRequestIP.', User Agent '.$this->clientUserAgent.' try access with Invalid or Missing parameters.');

  }

}
