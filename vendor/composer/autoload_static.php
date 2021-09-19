<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8fda963abd32d7a1e6b5d652f2bb2298
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8fda963abd32d7a1e6b5d652f2bb2298::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8fda963abd32d7a1e6b5d652f2bb2298::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8fda963abd32d7a1e6b5d652f2bb2298::$classMap;

        }, null, ClassLoader::class);
    }
}
