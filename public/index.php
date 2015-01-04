<?php require_once __DIR__ . '/../phalanx.init.php';

use Phalanx\Contracts\Http\HttpKernel;
use Phalanx\Foundation\Phalanx;
use Symfony\Component\HttpFoundation\Request;

/**
 * @var array $commonServices
 * @var array $httpServices
 * @var Phalanx $phalanx
 */

$commonServices = require __DIR__ . '/../config/services.php';
$httpServices   = require __DIR__ . '/../config/http.php';

$phalanx->loadProviders(array_merge($commonServices, $httpServices));


$phalanx->bindShared(Request::class, function() { return Request::createFromGlobals();});


/** @var HttpKernel $kernel */
$kernel     = $phalanx->make(HttpKernel::class);
$request    = $phalanx->make(Request::class);
$response   = $kernel->handle($request);

$response->send();

$kernel->terminate($request, $response);

