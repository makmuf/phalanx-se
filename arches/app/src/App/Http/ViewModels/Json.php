<?php namespace App\Http\ViewModels;

use Phalanx\Contracts\View\ViewModel;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class Json
 * @package CloudOffice\Http\ViewModels
 */
class Json implements ViewModel {

    /**
     * @var array
     */
    protected $data;

    /**
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * @return Response
     */
    public function toResponse()
    {
        return Response::create(json_encode($this->data), 200, ['Content-Type' => 'application/json']);
    }
}