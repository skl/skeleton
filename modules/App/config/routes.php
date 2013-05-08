<?php

return [
    /**
     * -------------------------------------------------------------------------
     * Routes
     * -------------------------------------------------------------------------
     * Define routes and their destinations, either point a route at a string of
     * ClassName::actionName, a closure or an array with multiple destinations
     * for different request methods.
     * -------------------------------------------------------------------------
     * Example
     * -------------------------------------------------------------------------
     * 1. String
     * -------------------------------------------------------------------------
     * '/route' => 'Namespace\ControllerName::action'
     * -------------------------------------------------------------------------
     * 2. Closure
     * -------------------------------------------------------------------------
     * '/route2' => function () { return 'Hello World!'; }
     * -------------------------------------------------------------------------
     * 3. Multiple Request Methods
     * -------------------------------------------------------------------------
     * '/route' => [
     *     'get' => 'Namespace\ControllerName::actionOne',
     *     'post' => 'Namespace\ControllerName::actionTwo'
     * ]
     * -------------------------------------------------------------------------
     */
    '/' => 'App\Controller\Home::index',


    /**
     * -------------------------------------------------------------------------
     * Custom 404 Route
     * -------------------------------------------------------------------------
     */
    '/404' => function () {
        $view = $this->getContainer()->resolve('Orno\Mvc\View\Renderer');
        $view->region('content', '<h1>Error 404</h1><p>Page Not Found</p>');
        return $view->render();
    }
];
