<?php

namespace _YabeMovebender;

// autoload_real.php @generated by Composer
class ComposerAutoloaderInit6a09e3fbeb497a6f891d4f791c276710
{
    private static $loader;
    public static function loadClassLoader($class)
    {
        if ('_YabeMovebender\\Composer\\Autoload\\ClassLoader' === $class) {
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
        \spl_autoload_register(array('_YabeMovebender\\ComposerAutoloaderInit6a09e3fbeb497a6f891d4f791c276710', 'loadClassLoader'), \true, \true);
        self::$loader = $loader = new \_YabeMovebender\Composer\Autoload\ClassLoader(\dirname(__DIR__));
        \spl_autoload_unregister(array('_YabeMovebender\\ComposerAutoloaderInit6a09e3fbeb497a6f891d4f791c276710', 'loadClassLoader'));
        require __DIR__ . '/autoload_static.php';
        \call_user_func(\_YabeMovebender\Composer\Autoload\ComposerStaticInit6a09e3fbeb497a6f891d4f791c276710::getInitializer($loader));
        $loader->setClassMapAuthoritative(\true);
        $loader->register(\true);
        $filesToLoad = \_YabeMovebender\Composer\Autoload\ComposerStaticInit6a09e3fbeb497a6f891d4f791c276710::$files;
        $requireFile = \Closure::bind(static function ($fileIdentifier, $file) {
            if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
                $GLOBALS['__composer_autoload_files'][$fileIdentifier] = \true;
                require $file;
            }
        }, null, null);
        foreach ($filesToLoad as $fileIdentifier => $file) {
            $requireFile($fileIdentifier, $file);
        }
        return $loader;
    }
}
