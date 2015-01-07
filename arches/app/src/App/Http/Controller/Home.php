<?php namespace App\Http\Controller;

use Phalanx\Router\RouteParameters;
use Phalanx\Template\View;

/**
 * Class Home
 * @package CloudOffice\Http\Controller
 */
class Home {

    /**
     * @param RouteParameters $parameters
     * @return View
     */
    public function index(RouteParameters $parameters)
    {
        return 'Hello ' . $parameters->get('name', 'World');
    }
}