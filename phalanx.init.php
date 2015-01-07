<?php require_once __DIR__ . '/autoload.php';

use Illuminate\Container\Container;
use Phalanx\Foundation\Phalanx;

Container::setInstance($phalanx  = new Phalanx(require_once __DIR__ . '/config/config.php'));

return $phalanx;