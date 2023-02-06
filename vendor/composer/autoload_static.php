<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita094bc4b0c10f201a52713160c812090
{
    public static $files = array (
        '0a16d552af22f3e21475124bc84e9203' => __DIR__ . '/../..' . '/src/startup.php',
    );

    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'G28\\ConvertImageToWebp\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'G28\\ConvertImageToWebp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita094bc4b0c10f201a52713160c812090::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita094bc4b0c10f201a52713160c812090::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita094bc4b0c10f201a52713160c812090::$classMap;

        }, null, ClassLoader::class);
    }
}