<?php namespace App\Http\Controller;

use Phalanx\Contracts\Log\Log;
use Phalanx\Template\View;

/**
 * Class Home
 * @package CloudOffice\Http\Controller
 */
class Home {

    protected $log;

    public function __construct(Log $log)
    {
        $this->log = $log;
    }

    /**
     * @param string $name
     * @return View
     */
    public function index($name = 'world')
    {
        $this->log->chanel('debug')->info('Hello world');

        return new View('hello', ['name' => $name]);
    }
}
