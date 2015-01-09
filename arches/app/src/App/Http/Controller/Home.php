<?php namespace App\Http\Controller;

use App\Http\ViewModels\Json;

/**
 * Class Home
 * @package CloudOffice\Http\Controller
 */
class Home {

    /**
     * @param string $name
     * @return Json
     */
    public function index($name = 'world')
    {
        return new Json(['name' => $name]);
    }
}