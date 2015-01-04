<?php namespace CloudOffice\Http\Controller;

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
        return new View('hello', ['name' => $parameters->get('name', 'World')]);
    }
}