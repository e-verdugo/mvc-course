<?php

namespace ContainerXILxh0d;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber'] = new \Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber([]);
    }
}
