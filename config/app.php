<?php

return [
    /**
     * -------------------------------------------------------------------------
     * Modules
     * -------------------------------------------------------------------------
     * A module is essentially a first level namespace, to register it, simply
     * add a key of the modules name below containing a further key 'src'
     * pointing to the directory location of the module source files.
     * -------------------------------------------------------------------------
     */
    'modules' => [
        'App' => [
            'src' => __DIR__ . '/../modules/App/src'
        ]
    ],
    /**
     * -------------------------------------------------------------------------
     * Dependencies
     * -------------------------------------------------------------------------
     * Any items that need to be registered with the dependency injection
     * container should be defined here. Items that are specifically used within
     * one module should be defined within the module config directory in the
     * file dependencies.php
     * -------------------------------------------------------------------------
     */
    'dependencies' => include __DIR__ . '/dependencies.php'
];
