<?php require_once __DIR__ . '/autoload.php';

use Illuminate\Container\Container;
use Phalanx\Foundation\Phalanx;

const PHALANX_ROOT = __DIR__;

Container::setInstance($phalanx  = new Phalanx);

return $phalanx;