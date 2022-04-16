<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd1f4b9c3ae9fb6896a5cf586d5158f7c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitd1f4b9c3ae9fb6896a5cf586d5158f7c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd1f4b9c3ae9fb6896a5cf586d5158f7c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInitd1f4b9c3ae9fb6896a5cf586d5158f7c::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}