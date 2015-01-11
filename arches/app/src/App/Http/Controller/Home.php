<?php namespace App\Http\Controller;

use App\Http\ViewModels\Json;
use Phalanx\Contracts\DB\DB;
use Phalanx\Contracts\Hash\Hasher;
use Phalanx\Template\View;

/**
 * Class Home
 * @package CloudOffice\Http\Controller
 */
class Home {

    protected $db;

    protected $hasher;

    public function __construct(DB $db, Hasher $hasher)
    {
        $this->db     = $db;
        $this->hasher = $hasher;
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