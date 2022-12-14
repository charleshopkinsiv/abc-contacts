<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit17e05289803f6c1766be4588cfcad73c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abc\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit17e05289803f6c1766be4588cfcad73c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit17e05289803f6c1766be4588cfcad73c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit17e05289803f6c1766be4588cfcad73c::$classMap;

        }, null, ClassLoader::class);
    }
}
