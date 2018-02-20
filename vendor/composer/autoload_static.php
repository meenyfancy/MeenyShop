<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite383ba8e25144fc67e11803adc6a792c
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite383ba8e25144fc67e11803adc6a792c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite383ba8e25144fc67e11803adc6a792c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}