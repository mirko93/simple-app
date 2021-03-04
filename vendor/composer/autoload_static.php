<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit07a9ed97292edf90d4f22fc36fd8623b
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit07a9ed97292edf90d4f22fc36fd8623b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit07a9ed97292edf90d4f22fc36fd8623b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit07a9ed97292edf90d4f22fc36fd8623b::$classMap;

        }, null, ClassLoader::class);
    }
}
