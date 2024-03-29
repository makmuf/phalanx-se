<?php namespace App\Http;

use App\Http\Controller\Home;
use App\Http\Filter\UcFirstName;
use Phalanx\Booting\BootingServiceProvider;
use Phalanx\Booting\EarlyBoot;
use Phalanx\Contracts\Log\Log;
use Phalanx\Contracts\Router\Router;
use Phalanx\Contracts\Template\TemplateEnvironment;
use Phalanx\ErrorHandler\ErrorHandling;
use Phalanx\Router\Routing;
use Phalanx\Template\Templating;
use Phalanx\Template\View;

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

    /**
     * @param TemplateEnvironment $env
     */
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
        /**@var Log $logger*/
        $logger = $this->phalanx->make(Log::class);
        $logger->chanel('system')->error(
            $exception->getMessage(),
            $exception->getTrace()
        );

        return new View('error', [], 500);
    }

    /**
     * @return View
     */
    protected function notFound()
    {
        return new View('notfound', [], 404);
    }
}
