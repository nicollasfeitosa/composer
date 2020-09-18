<?php

require __DIR__.'/vendor/autoload.php';


use Monolog\Logger;
use Monolog\Handler\StreamHandler;

use NicollasFig\CursoComposer\Hello;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('app.log', Logger::WARNING));

// add records to the log
$log->warning( (new Hello)->say('Nicollas') );
