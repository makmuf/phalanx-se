<?php namespace App\Http\Controller;

use App\Http\ViewModels\Json;
use Phalanx\Contracts\DB\DB;
use Phalanx\Template\View;

/**
 * Class Home
 * @package CloudOffice\Http\Controller
 */
class Home {

    protected $db;

    public function __construct(DB $db)
    {
        $this->db = $db;
    }

    /**
     * @param string $name
     * @return Json
     */
    public function index($name = 'world')
    {
        return new View('hello', ['name' => $name]);
    }
}