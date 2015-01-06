<?php namespace App\Http;

use App\Http\Controller\Home;
use App\Http\Filter\UcFirstName;
use Phalanx\Contracts\Router\Router;
use Phalanx\ErrorHandler\ErrorHandling;
use Phalanx\Http\HttpException;
use Phalanx\Http\KernelServiceProvider;
use Phalanx\Router\Routing;
use Phalanx\Template\View;
use Psr\Log\LoggerInterface;

class HttpLayerServiceProvider extends KernelServiceProvider {

    use Routing, ErrorHandling;

    /**
     * @param Router $router
     * @return void
     */
    protected function routing(Router $router)
    {
        $router->get('/[:name]?', 'home')
            ->then(new UcFirstName)
            ->then(Home::class, 'index')
        ;
    }

    /**
     * @param \Exception $exception
     * @return View
     */
    protected function error(\Exception $exception)
    {
        /**@var LoggerInterface $logger*/
        $logger = $this->phalanx->make(LoggerInterface::class);
        $logger->error(
            $exception->getMessage(),
            $exception->getTrace()
        );

        return new View('error', [], 500);
    }

    /**
     * @param HttpException $exception
     * @return View
     */
    protected function notFound(HttpException $exception)
    {
        /**@var LoggerInterface $logger*/
        $logger = $this->phalanx->make(LoggerInterface::class);
        $logger->notice(
            $exception->getMessage(),
            $exception->getTrace()
        );

        return new View('notfound', [], 404);
    }
}
