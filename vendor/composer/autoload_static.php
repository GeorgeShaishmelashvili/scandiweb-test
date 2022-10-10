<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6e4564cb6fa1683c77105a02fcd75fd6
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6e4564cb6fa1683c77105a02fcd75fd6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6e4564cb6fa1683c77105a02fcd75fd6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6e4564cb6fa1683c77105a02fcd75fd6::$classMap;

        }, null, ClassLoader::class);
    }
}