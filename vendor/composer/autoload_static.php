<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit731e23dc26155fefefb4dbbb5335e712
{
    public static $files = array (
        '6c3ab67e5363c35f800d54085379e080' => __DIR__ . '/..' . '/limingxinleo/limx-func/src/functions/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\composer\\' => 15,
        ),
        'l' => 
        array (
            'limx\\tools\\wx\\' => 14,
            'limx\\func\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'limx\\tools\\wx\\' => 
        array (
            0 => __DIR__ . '/..' . '/limingxinleo/wx-api/src',
        ),
        'limx\\func\\' => 
        array (
            0 => __DIR__ . '/..' . '/limingxinleo/limx-func/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit731e23dc26155fefefb4dbbb5335e712::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit731e23dc26155fefefb4dbbb5335e712::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}