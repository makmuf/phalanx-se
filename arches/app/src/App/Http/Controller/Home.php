<?php namespace App\Http\Controller;

use App\Http\ViewModels\Json;
use Phalanx\Contracts\Config\Config;
use Phalanx\Contracts\Log\Log;
use Phalanx\Template\View;

/**
 * Class Home
 * @package CloudOffice\Http\Controller
 */
class Home {

    protected $config;

    protected $log;

    public function __construct(Config $config, Log $log)
    {
        $this->config = $config;

        $this->log    = $log;
    }

    /**
     * @param string $name
     * @return View
     */
    public function index($name = 'world')
    {
        $this->log->chanel()->info('Hello World');
//        return new Json($this->config->dump());
        return new View('hello', ['name' => $name]);
    }
}
