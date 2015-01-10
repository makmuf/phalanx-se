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
     * @var int
     */
    protected $status;

    /**
     * @var array
     */
    protected $headers;

    /**
     * @param array $data
     * @param int $status
     * @param $headers
     */
    public function __construct(array $data = [], $status = 200, $headers = [])
    {
        $this->data     = $data;
        $this->status   = $status;
        $this->headers  = array_merge(['Content-Type' => 'application/json'], $headers);
    }

    /**
     * @return Response
     */
    public function toResponse()
    {
        return Response::create(json_encode($this->data), $this->status, $this->headers);
    }
}