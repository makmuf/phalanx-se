<?php namespace App\Http;

use App\Http\Controller\Home;
use App\Http\Filter\UcFirstName;
use Phalanx\Booting\BootingServiceProvider;
use Phalanx\Booting\EarlyBoot;
use Phalanx\Contracts\Router\Router;
use Phalanx\Contracts\Template\TemplateEnvironment;
use Phalanx\ErrorHandler\ErrorHandling;
use Phalanx\Http\HttpException;
use Phalanx\Router\Routing;
use Phalanx\Template\Templating;
use Phalanx\Template\View;
use Psr\Log\LoggerInterface;

class HttpServiceProvider extends BootingServiceProvider {

    use EarlyBoot;
    use Routing, ErrorHandling, Templating;

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

    protected function templating(TemplateEnvironment $env)
    {
        $env->addTemplatePath(__DIR__ . '/../../../template');
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
