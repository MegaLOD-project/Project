<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94ab9a06aeb38e863c8877bf1207d56c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
            'Psr\\Container\\' => 14,
            'PhpParser\\' => 10,
        ),
        'L' => 
        array (
            'Laminas\\Validator\\' => 18,
            'Laminas\\Uri\\' => 12,
            'Laminas\\Translator\\' => 19,
            'Laminas\\Stdlib\\' => 15,
            'Laminas\\ServiceManager\\' => 23,
            'Laminas\\Loader\\' => 15,
            'Laminas\\Http\\' => 13,
            'Laminas\\Escaper\\' => 16,
        ),
        'G' => 
        array (
            'GraphDBDataSync\\' => 16,
        ),
        'B' => 
        array (
            'Brick\\VarExporter\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PhpParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
        ),
        'Laminas\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-validator/src',
        ),
        'Laminas\\Uri\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-uri/src',
        ),
        'Laminas\\Translator\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-translator/src',
        ),
        'Laminas\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-stdlib/src',
        ),
        'Laminas\\ServiceManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-servicemanager/src',
        ),
        'Laminas\\Loader\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-loader/src',
        ),
        'Laminas\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-http/src',
        ),
        'Laminas\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-escaper/src',
        ),
        'GraphDBDataSync\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Brick\\VarExporter\\' => 
        array (
            0 => __DIR__ . '/..' . '/brick/varexporter/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit94ab9a06aeb38e863c8877bf1207d56c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit94ab9a06aeb38e863c8877bf1207d56c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit94ab9a06aeb38e863c8877bf1207d56c::$classMap;

        }, null, ClassLoader::class);
    }
}
