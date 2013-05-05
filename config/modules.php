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
    'App' => [
        'src' => __DIR__ . '/../modules/App/src'
    ]
];
