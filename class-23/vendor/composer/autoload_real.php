<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc9d85001a94bb4c9866863913c69d60c
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

        spl_autoload_register(array('ComposerAutoloaderInitc9d85001a94bb4c9866863913c69d60c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc9d85001a94bb4c9866863913c69d60c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc9d85001a94bb4c9866863913c69d60c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
