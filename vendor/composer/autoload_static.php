<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6d8f8384ab280d298c6d9c9cf7b99600
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Models\\AbstractTransport' => __DIR__ . '/../..' . '/Models/AbstractTransport.php',
        'Models\\Brand' => __DIR__ . '/../..' . '/Models/Brand.php',
        'Models\\Car' => __DIR__ . '/../..' . '/Models/Car.php',
        'Models\\Person' => __DIR__ . '/../..' . '/Models/Person.php',
        'Models\\Stock' => __DIR__ . '/../..' . '/Models/Stock.php',
        'Models\\Track' => __DIR__ . '/../..' . '/Models/Track.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6d8f8384ab280d298c6d9c9cf7b99600::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6d8f8384ab280d298c6d9c9cf7b99600::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6d8f8384ab280d298c6d9c9cf7b99600::$classMap;

        }, null, ClassLoader::class);
    }
}
