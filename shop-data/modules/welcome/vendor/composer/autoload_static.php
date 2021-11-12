<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd82f30447ad95aa08a0dd847d996cfb5
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OnBoarding\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OnBoarding\\' => 
        array (
            0 => __DIR__ . '/../..' . '/OnBoarding',
        ),
    );

    public static $classMap = array (
        'OnBoarding\\Configuration' => __DIR__ . '/../..' . '/OnBoarding/Configuration.php',
        'OnBoarding\\OnBoarding' => __DIR__ . '/../..' . '/OnBoarding/OnBoarding.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd82f30447ad95aa08a0dd847d996cfb5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd82f30447ad95aa08a0dd847d996cfb5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd82f30447ad95aa08a0dd847d996cfb5::$classMap;

        }, null, ClassLoader::class);
    }
}
