<?php

// autoload_alias_loader_real.php @generated by typo3/class-alias-loader

class ClassAliasLoaderInitb562565835df60d59bed148e97eba3a1 {

    private static $loader;

    public static function initializeClassAliasLoader($composerClassLoader) {
        if (null !== self::$loader) {
            return self::$loader;
        }
        self::$loader = $composerClassLoader;

        $classAliasMap = require __DIR__ . '/autoload_classaliasmap.php';
        $classAliasLoader = new TYPO3\ClassAliasLoader\ClassAliasLoader($composerClassLoader);
        $classAliasLoader->setAliasMap($classAliasMap);
        $classAliasLoader->setCaseSensitiveClassLoading(true);
        $classAliasLoader->register(true);

        TYPO3\ClassAliasLoader\ClassAliasMap::setClassAliasLoader($classAliasLoader);

        return self::$loader;
    }
}
