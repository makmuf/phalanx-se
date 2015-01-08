<?php require_once __DIR__ . '/autoload.php';

use Illuminate\Container\Container;
use Phalanx\Foundation\Phalanx;

Container::setInstance($phalanx  = new Phalanx(__DIR__ . '/config'));

return $phalanx;