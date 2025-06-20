<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2035f78129b9a057c3472c76e9d8cc45
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2035f78129b9a057c3472c76e9d8cc45::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2035f78129b9a057c3472c76e9d8cc45::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2035f78129b9a057c3472c76e9d8cc45::$classMap;

        }, null, ClassLoader::class);
    }
}
