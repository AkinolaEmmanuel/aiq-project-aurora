<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit95b24ff7281a468d99fcc684f470b9c3
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit95b24ff7281a468d99fcc684f470b9c3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit95b24ff7281a468d99fcc684f470b9c3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit95b24ff7281a468d99fcc684f470b9c3::$classMap;

        }, null, ClassLoader::class);
    }
}
