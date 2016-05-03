<?php

namespace App;

use \App\App as App;

// Set current working dir
chdir(__DIR__);

// Autoloader
require_once './vendor/autoload.php';

// End all output with a newline (mostly for cli)
register_shutdown_function(function(){
    echo PHP_EOL;
});

// Kick off the app
$app = new App();
$app->index();
