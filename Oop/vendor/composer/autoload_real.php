<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit7452c17dcdb1fb2c96e6a34b0151b479
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

        spl_autoload_register(array('ComposerAutoloaderInit7452c17dcdb1fb2c96e6a34b0151b479', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit7452c17dcdb1fb2c96e6a34b0151b479', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit7452c17dcdb1fb2c96e6a34b0151b479::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
