<?php namespace App\Http\Controller;

use App\Http\ViewModels\Json;
use Phalanx\Contracts\Config\Config;

/**
 * Class Home
 * @package CloudOffice\Http\Controller
 */
class Home {

    protected $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @param string $name
     * @return Json
     */
    public function index($name = 'world')
    {
        return new Json($this->config->dump());
    }
}