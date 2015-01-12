<?php namespace App\Http\Controller;

use Phalanx\Template\View;

/**
 * Class Home
 * @package CloudOffice\Http\Controller
 */
class Home {

    /**
     * @param string $name
     * @return View
     */
    public function index($name = 'world')
    {
        return new View('hello', ['name' => $name]);
    }
}
