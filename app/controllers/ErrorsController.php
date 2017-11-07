<?php

class ErrorsController extends ControllerBase {

  public function notFoundAction() {

    $response = new \Phalcon\Http\Response();
    $response->setHeader("Content-Type", "application/json");
    $response->setJsonContent(
      [
        "statusResp" => "OK",
        "errCode"    => "1",
        "errTxt"     => "Invalid or Missing Parameters."
      ]
    );
    $response->send();
    
  }

}
