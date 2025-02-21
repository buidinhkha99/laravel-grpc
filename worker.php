<?php

use Spiral\RoadRunner\Worker;
use Spiral\Goridge\StreamRelay;
//use Spiral\RoadRunner\GRPC\Reflection\ReflectionService;

ini_set('display_errors', 'stderr');

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';

$app->singleton(
    App\Grpc\Contracts\Kernel::class,
    App\Grpc\Kernel::class
);

$app->singleton(
    App\Grpc\Contracts\ServiceInvoker::class,
    App\Grpc\LaravelServiceInvoker::class
);

$server = $app->make(App\Grpc\Contracts\Kernel::class);

$server->registerService(Protobuf\Identity\AuthServiceInterface::class);
$server->registerService(ReflectionService::create($server));

$w = new Worker(new StreamRelay(STDIN, STDOUT));

$server->serve($w);
