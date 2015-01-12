<?php namespace App\Http\Controller;

use Phalanx\Template\View;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class Home
 * @package App\Http\Controller
 */
class Home {

    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @param string $name
     * @return View
     */
    public function index($name = 'world')
    {
        return new View('hello', ['name' => $name]);
    }
}
