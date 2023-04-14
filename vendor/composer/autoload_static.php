<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb1ce9ba52516fef7ef10796dfcfcdbac
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb1ce9ba52516fef7ef10796dfcfcdbac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb1ce9ba52516fef7ef10796dfcfcdbac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb1ce9ba52516fef7ef10796dfcfcdbac::$classMap;

        }, null, ClassLoader::class);
    }
}
