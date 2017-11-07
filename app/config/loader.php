<?php

$loader = new \Phalcon\Loader();

/**
 * Register Namespaces
 */

/**
 * Register Dirs
 */
$loader->registerDirs(
    [
        $config->application->controllersDir,
        $config->application->modelsDir
    ]
);

$loader->register();
