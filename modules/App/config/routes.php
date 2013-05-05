<?php

return [
    /**
     * -------------------------------------------------------------------------
     * Routes that should respond to any HTTP request verb
     * -------------------------------------------------------------------------
     */
    'any' => [
        '/' => 'App\Controller\Home::index',

        // Custom 404 route
        '/404' => function () {
            $view = $this->getContainer()->resolve('Orno\Mvc\View\Renderer');
            $view->region('content', '<h1>Error 404</h1><p>Page Not Found</p>');
            return $view->render();
        }
    ],
    /**
     * -------------------------------------------------------------------------
     * Routes that should respond to the GET HTTP request verb
     * -------------------------------------------------------------------------
     */
    'get' => [

    ],
    /**
     * -------------------------------------------------------------------------
     * Routes that should respond to the POST HTTP request verb
     * -------------------------------------------------------------------------
     */
    'post' => [

    ],
    /**
     * -------------------------------------------------------------------------
     * Routes that should respond to the PUT HTTP request verb
     * -------------------------------------------------------------------------
     */
    'put' => [

    ],
    /**
     * -------------------------------------------------------------------------
     * Routes that should respond to the PATCH HTTP request verb
     * -------------------------------------------------------------------------
     */
    'patch' => [

    ],
    /**
     * -------------------------------------------------------------------------
     * Routes that should respond to the DELETE HTTP request verb
     * -------------------------------------------------------------------------
     */
    'delete' => [

    ],
    /**
     * -------------------------------------------------------------------------
     * Routes that should respond to the OPTIONS HTTP request verb
     * -------------------------------------------------------------------------
     */
    'options' => [

    ],
    /**
     * -------------------------------------------------------------------------
     * Restful Routes
     * -------------------------------------------------------------------------
     * Defining a restful route will create routes for all of the request verbs
     * above. See http://getorno.com/framework/http-verbs
     * -------------------------------------------------------------------------
     */
    'restful' => [

    ]
];
