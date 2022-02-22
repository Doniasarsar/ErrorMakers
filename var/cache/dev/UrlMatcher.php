<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/evenement1' => [[['_route' => 'evenement1', '_controller' => 'App\\Controller\\EvenementController::index'], null, null, null, false, false, null]],
        '/evenement/aff' => [[['_route' => 'ev_aff', '_controller' => 'App\\Controller\\EvenementController::afficher'], null, null, null, false, false, null]],
        '/evenement/add' => [[['_route' => 'event_add', '_controller' => 'App\\Controller\\EvenementController::Add'], null, null, null, false, false, null]],
        '/front' => [[['_route' => 'front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/eventfront' => [[['_route' => 'ev_front_aff', '_controller' => 'App\\Controller\\FrontController::afficher'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/commentaires/(?'
                    .'|([^/]++)(*:194)'
                    .'|delete/([^/]++)(*:217)'
                .')'
                .'|/evenement/(?'
                    .'|delete/([^/]++)(*:255)'
                    .'|update/([^/]++)(*:278)'
                .')'
                .'|/detail/([^/]++)(*:303)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'commentaires', '_controller' => 'App\\Controller\\CommentairesController::index'], ['id'], null, null, false, true, null]],
        217 => [[['_route' => 'com_delete', '_controller' => 'App\\Controller\\CommentairesController::Supprimer'], ['id'], null, null, false, true, null]],
        255 => [[['_route' => 'ev_delete', '_controller' => 'App\\Controller\\EvenementController::Supprimer'], ['id'], null, null, false, true, null]],
        278 => [[['_route' => 'ev_update', '_controller' => 'App\\Controller\\EvenementController::Update'], ['id'], null, null, false, true, null]],
        303 => [
            [['_route' => 'ev_front_detail', '_controller' => 'App\\Controller\\EvenementController::detail'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
