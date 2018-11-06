<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7cd130a8388ffb4fbdd82b804773905e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SON\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SON\\' => 
        array (
            0 => __DIR__ . '/..' . '/SON',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7cd130a8388ffb4fbdd82b804773905e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7cd130a8388ffb4fbdd82b804773905e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
