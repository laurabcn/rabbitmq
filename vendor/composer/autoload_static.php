<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc9868eb79b5b70dcd783d28af5c0363
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpAmqpLib\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpAmqpLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc9868eb79b5b70dcd783d28af5c0363::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc9868eb79b5b70dcd783d28af5c0363::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}