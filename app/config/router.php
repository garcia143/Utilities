<?php

$router = $di->getRouter(false);

$router->notFound(
  [
    'controller' => 'Errors',
    'action' => 'notFound'
  ]
);

$router->addGet('/',
  [
    'controller' => 'Errors',
    'action' => 'notFound'
  ]
);

$router->addGet('/getCountryCode',
  [
    'controller' => 'IP',
    'action'     => 'gcc'    
  ]
);

$router->handle();
