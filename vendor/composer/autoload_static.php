<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit776ef079ea220c669150034482ab23e2
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit776ef079ea220c669150034482ab23e2::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit776ef079ea220c669150034482ab23e2::$classMap;

        }, null, ClassLoader::class);
    }
}
