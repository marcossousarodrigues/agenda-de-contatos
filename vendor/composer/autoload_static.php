<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit052d0c89ecde237b5cf007b2d58c82ca
{
    public static $files = array (
        '309d2273f52d3d0ba848ba3ee075bf26' => __DIR__ . '/../..' . '/config/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'src\\controllers\\ContactController' => __DIR__ . '/../..' . '/src/controllers/ContactController.php',
        'src\\controllers\\PagesController' => __DIR__ . '/../..' . '/src/controllers/PagesController.php',
        'src\\controllers\\UserController' => __DIR__ . '/../..' . '/src/controllers/UserController.php',
        'src\\routes\\Router' => __DIR__ . '/../..' . '/src/routes/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit052d0c89ecde237b5cf007b2d58c82ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit052d0c89ecde237b5cf007b2d58c82ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit052d0c89ecde237b5cf007b2d58c82ca::$classMap;

        }, null, ClassLoader::class);
    }
}
