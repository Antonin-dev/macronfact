<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/add/fact' => [[['_route' => 'add_fact', '_controller' => 'App\\Controller\\AddFactController::index'], null, null, null, false, false, null]],
        '/floadmin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/factjson' => [[['_route' => 'factjson', '_controller' => 'App\\Controller\\AjaxController::index'], null, null, null, false, false, null]],
        '/factjson/all' => [[['_route' => 'factjson_all', '_controller' => 'App\\Controller\\AjaxController::jsonActionAll'], null, null, null, false, false, null]],
        '/factjson/random' => [[['_route' => 'factjson_random', '_controller' => 'App\\Controller\\AjaxController::jsonActionOne'], null, null, null, false, false, null]],
        '/factjson/list' => [[['_route' => 'factjson_list', '_controller' => 'App\\Controller\\AjaxController::jsonActionList'], null, null, null, false, false, null]],
        '/fact/random' => [[['_route' => 'fact_random', '_controller' => 'App\\Controller\\FactRandomController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/factjson/auteurs/([^/]++)(*:33)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [
            [['_route' => 'factjson_auteur', '_controller' => 'App\\Controller\\AjaxController::jsonActionAuteur'], ['auteur'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
