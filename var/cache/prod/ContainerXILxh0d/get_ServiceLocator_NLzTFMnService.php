<?php

namespace ContainerXILxh0d;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NLzTFMnService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.nLzTFMn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nLzTFMn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'libraryRepository' => ['privates', 'App\\Repository\\LibraryRepository', 'getLibraryRepositoryService', true],
        ], [
            'doctrine' => '?',
            'libraryRepository' => 'App\\Repository\\LibraryRepository',
        ]);
    }
}
