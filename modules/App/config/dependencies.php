<?php

return [
    /**
     * -------------------------------------------------------------------------
     * Dependencies
     * -------------------------------------------------------------------------
     * Defining your object dependencies here will allow you to use dependency
     * injection within all of your controllers, models etc... making testing
     * much easier. Orno by default will try to resolve any type hinted
     * dependencies automatically but if a definition exists here, performance
     * and resolution speed will be improved greatly.
     * -------------------------------------------------------------------------
     */
    'App\Controller\Home' => [
        'arguments' => ['Orno\Mvc\View\Renderer']
    ],
    'Orno\Mvc\View\Renderer' => [
        'methods' => [
            'addLayout' => [
                ['default' => __DIR__ . '/../views/layouts/default.php']
            ],
            'addViewPath' => [
                __DIR__ . '/../views'
            ]
        ]
    ]
];
