<?php namespace App\Http\Filter;

use Phalanx\Contracts\View\ViewModel;
use Phalanx\Router\Filter;
use Phalanx\Router\RouteParameters;
use Symfony\Component\HttpFoundation\Response;

class UcFirstName extends Filter {

    /**
     * @param RouteParameters $parameters
     * @return string|ViewModel|Response
     */
    public function run(RouteParameters $parameters)
    {
        $parameters->set('name' , ucfirst(strtolower($parameters->get('name', 'World'))));
    }
}