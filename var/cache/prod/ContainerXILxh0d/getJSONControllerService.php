<?php

namespace ContainerXILxh0d;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJSONControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\JSONController' shared autowired service.
     *
     * @return \App\Controller\JSONController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\JSONController'] = $instance = new \App\Controller\JSONController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\JSONController', $container));

        return $instance;
    }
}
