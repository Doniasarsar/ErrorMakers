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
        '/commande' => [[['_route' => 'commande', '_controller' => 'App\\Controller\\CommandeController::index'], null, null, null, false, false, null]],
        '/commandes' => [[['_route' => 'Commandes', '_controller' => 'App\\Controller\\CommandeController::afficher'], null, null, null, false, false, null]],
        '/front' => [[['_route' => 'front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/livraison/controlleur' => [[['_route' => 'livraison_controlleur', '_controller' => 'App\\Controller\\LivraisonControlleur::index'], null, null, null, false, false, null]],
        '/livraison/list' => [[['_route' => 'r_list', '_controller' => 'App\\Controller\\LivraisonControlleur::afficher'], null, null, null, false, false, null]],
        '/vehicule' => [[['_route' => 'vehicule', '_controller' => 'App\\Controller\\VehiculeController::index'], null, null, null, false, false, null]],
        '/voiture/list' => [[['_route' => 'voi_list', '_controller' => 'App\\Controller\\VehiculeController::afficherVoiture'], null, null, null, false, false, null]],
        '/moto/list' => [[['_route' => 'mot_list', '_controller' => 'App\\Controller\\VehiculeController::afficherMoto'], null, null, null, false, false, null]],
        '/camion/list' => [[['_route' => 'cam_list', '_controller' => 'App\\Controller\\VehiculeController::afficherCamion'], null, null, null, false, false, null]],
        '/voiture/add' => [[['_route' => 'voi_add', '_controller' => 'App\\Controller\\VehiculeController::AddVoiture'], null, null, null, false, false, null]],
        '/moto/add' => [[['_route' => 'mot_add', '_controller' => 'App\\Controller\\VehiculeController::AddMoto'], null, null, null, false, false, null]],
        '/camion/add' => [[['_route' => 'cam_add', '_controller' => 'App\\Controller\\VehiculeController::AddCamion'], null, null, null, false, false, null]],
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
                .'|/livraison/(?'
                    .'|delete/([^/]++)(*:198)'
                    .'|add/([^/]++)(*:218)'
                    .'|update/([^/]++)(*:241)'
                .')'
                .'|/v(?'
                    .'|ehicule/delete/([^/]++)(?'
                        .'|(*:281)'
                    .')'
                    .'|oiture/update/([^/]++)(*:312)'
                .')'
                .'|/moto/update/([^/]++)(*:342)'
                .'|/camion/update/([^/]++)(*:373)'
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
        198 => [[['_route' => 'r_delete', '_controller' => 'App\\Controller\\LivraisonControlleur::Supprimer'], ['id'], null, null, false, true, null]],
        218 => [[['_route' => 'liv_add', '_controller' => 'App\\Controller\\LivraisonControlleur::Add'], ['id'], null, null, false, true, null]],
        241 => [[['_route' => 'r_update', '_controller' => 'App\\Controller\\LivraisonControlleur::Update'], ['id'], null, null, false, true, null]],
        281 => [
            [['_route' => 'voi_delete', '_controller' => 'App\\Controller\\VehiculeController::SupprimerVoiture'], ['id'], null, null, false, true, null],
            [['_route' => 'mot_delete', '_controller' => 'App\\Controller\\VehiculeController::SupprimerMoto'], ['id'], null, null, false, true, null],
            [['_route' => 'cam_delete', '_controller' => 'App\\Controller\\VehiculeController::SupprimerCamion'], ['id'], null, null, false, true, null],
        ],
        312 => [[['_route' => 'voi_update', '_controller' => 'App\\Controller\\VehiculeController::Update'], ['id'], null, null, false, true, null]],
        342 => [[['_route' => 'mot_update', '_controller' => 'App\\Controller\\VehiculeController::UpdateMoto'], ['id'], null, null, false, true, null]],
        373 => [
            [['_route' => 'cam_update', '_controller' => 'App\\Controller\\VehiculeController::UpdateCamion'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
