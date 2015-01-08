<?php require_once __DIR__ . '/../phalanx.init.php';

use Phalanx\Contracts\Http\HttpKernel;
use Phalanx\Foundation\Phalanx;
use Symfony\Component\HttpFoundation\Request;

/**
 * @var Phalanx $phalanx
 */

$phalanx->bindShared(Request::class, function() {
    return Request::createFromGlobals();
});

$phalanx->boot('http');

/** @var HttpKernel $kernel */
$kernel     = $phalanx->make(HttpKernel::class);
$request    = $phalanx->make(Request::class);
$response   = $kernel->handle($request);

$response->send();

$kernel->terminate($request, $response);

