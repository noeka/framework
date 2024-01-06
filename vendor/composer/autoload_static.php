<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc29e10a0271a62a2e5702f6be9a8241
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'N' => 
        array (
            'Noeka\\Framework\\' => 16,
            'Noeka\\DI\\' => 9,
            'Noeka\\Application\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Noeka\\Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Noeka\\DI\\' => 
        array (
            0 => __DIR__ . '/..' . '/noeka/di/src/Noeka',
        ),
        'Noeka\\Application\\' => 
        array (
            0 => __DIR__ . '/..' . '/noeka/application/src/Noeka',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc29e10a0271a62a2e5702f6be9a8241::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc29e10a0271a62a2e5702f6be9a8241::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdc29e10a0271a62a2e5702f6be9a8241::$classMap;

        }, null, ClassLoader::class);
    }
}
