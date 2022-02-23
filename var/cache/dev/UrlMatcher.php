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
        '/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/dashboard/listU' => [[['_route' => 'admin_userlist', '_controller' => 'App\\Controller\\AdminController::afficherUser'], null, null, null, false, false, null]],
        '/admin/dashboard/listD' => [[['_route' => 'admin_demandelist', '_controller' => 'App\\Controller\\AdminController::afficherDemande'], null, null, null, false, false, null]],
        '/admin/loginadmin' => [[['_route' => 'admin_loginadmin', '_controller' => 'App\\Controller\\AdminController::login'], null, null, null, false, false, null]],
        '/admin/logout' => [[['_route' => 'admin_logoutadmin', '_controller' => 'App\\Controller\\AdminController::logout'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, true, false, null]],
        '/cart/deleteall' => [[['_route' => 'cart_deleteall', '_controller' => 'App\\Controller\\CartController::deleteall'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'commande', '_controller' => 'App\\Controller\\CommandeController::ajoutercommande'], null, null, null, false, false, null]],
        '/admin/affcommande' => [[['_route' => 'admincommande', '_controller' => 'App\\Controller\\CommandeController::afficher'], null, null, null, false, false, null]],
        '/demande' => [[['_route' => 'demande', '_controller' => 'App\\Controller\\DemandeController::index'], null, null, null, false, false, null]],
        '/demande/addActeur' => [[['_route' => 'acteurSAdd', '_controller' => 'App\\Controller\\DemandeController::AddActeur'], null, null, null, false, false, null]],
        '/admin/evenement/aff' => [[['_route' => 'ev_aff', '_controller' => 'App\\Controller\\EvenementController::afficher'], null, null, null, false, false, null]],
        '/admin/evenement/add' => [[['_route' => 'event_add', '_controller' => 'App\\Controller\\EvenementController::Add'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/eventfront' => [[['_route' => 'ev_front_aff', '_controller' => 'App\\Controller\\FrontController::afficherevenement'], null, null, null, false, false, null]],
        '/admin/ligne/commande' => [[['_route' => 'ligne_commande', '_controller' => 'App\\Controller\\LigneCommandeController::index'], null, null, null, false, false, null]],
        '/admin/livraison/controlleur' => [[['_route' => 'livraison_controlleur', '_controller' => 'App\\Controller\\LivraisonControlleur::index'], null, null, null, false, false, null]],
        '/admin/livraison/list' => [[['_route' => 'livraison_list', '_controller' => 'App\\Controller\\LivraisonControlleur::afficher'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation', '_controller' => 'App\\Controller\\ReclamationController::index'], null, null, null, false, false, null]],
        '/reponse' => [[['_route' => 'reponse', '_controller' => 'App\\Controller\\ReponseController::index'], null, null, null, false, false, null]],
        '/admin/reponse/recList' => [[['_route' => 'list_reclamation', '_controller' => 'App\\Controller\\ReponseController::afficher'], null, null, null, false, false, null]],
        '/admin/reponse/list' => [[['_route' => 'reponse_list', '_controller' => 'App\\Controller\\ReponseController::afficher_reponses'], null, null, null, false, false, null]],
        '/utilisateurs' => [[['_route' => 'utilisateurs', '_controller' => 'App\\Controller\\UtilisateursController::index'], null, null, null, false, false, null]],
        '/utilisateurs/add' => [[['_route' => 'userAdd', '_controller' => 'App\\Controller\\UtilisateursController::AddUser'], null, null, null, false, false, null]],
        '/utilisateurs/compte' => [[['_route' => 'usercompte', '_controller' => 'App\\Controller\\UtilisateursController::Compte'], null, null, null, false, false, null]],
        '/utilisateurs/updatepass' => [[['_route' => 'passupdate', '_controller' => 'App\\Controller\\UtilisateursController::EditPassword'], null, null, null, false, false, null]],
        '/utilisateurs/confirmuser' => [[['_route' => 'confirmuser', '_controller' => 'App\\Controller\\UtilisateursController::ConfirmUser'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\UtilisateursController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\UtilisateursController::logout'], null, null, null, false, false, null]],
        '/admin/vehicule' => [[['_route' => 'vehicule', '_controller' => 'App\\Controller\\VehiculeController::index'], null, null, null, false, false, null]],
        '/admin/voiture/list' => [[['_route' => 'voi_list', '_controller' => 'App\\Controller\\VehiculeController::afficherVoiture'], null, null, null, false, false, null]],
        '/admin/moto/list' => [[['_route' => 'mot_list', '_controller' => 'App\\Controller\\VehiculeController::afficherMoto'], null, null, null, false, false, null]],
        '/admin/camion/list' => [[['_route' => 'cam_list', '_controller' => 'App\\Controller\\VehiculeController::afficherCamion'], null, null, null, false, false, null]],
        '/admin/voiture/add' => [[['_route' => 'voi_add', '_controller' => 'App\\Controller\\VehiculeController::AddVoiture'], null, null, null, false, false, null]],
        '/admin/moto/add' => [[['_route' => 'mot_add', '_controller' => 'App\\Controller\\VehiculeController::AddMoto'], null, null, null, false, false, null]],
        '/admin/camion/add' => [[['_route' => 'cam_add', '_controller' => 'App\\Controller\\VehiculeController::AddCamion'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|dashboard/list(?'
                        .'|U/delete/([^/]++)(*:213)'
                        .'|D/(?'
                            .'|delete/([^/]++)(*:241)'
                            .'|accept/([^/]++)(*:264)'
                        .')'
                    .')'
                    .'|supp(?'
                        .'|commande/([^/]++)(*:298)'
                        .'|ligne/([^/]++)(*:320)'
                    .')'
                    .'|mo(?'
                        .'|difcommande/([^/]++)(*:354)'
                        .'|to/(?'
                            .'|delete/([^/]++)(*:383)'
                            .'|update/([^/]++)(*:406)'
                        .')'
                    .')'
                    .'|evenement/(?'
                        .'|delete/([^/]++)(*:444)'
                        .'|update/([^/]++)(*:467)'
                    .')'
                    .'|livraison/(?'
                        .'|delete/([^/]++)(*:504)'
                        .'|add/([^/]++)(*:524)'
                        .'|update/([^/]++)(*:547)'
                    .')'
                    .'|voiture/(?'
                        .'|delete/([^/]++)(*:582)'
                        .'|update/([^/]++)(*:605)'
                    .')'
                    .'|camion/(?'
                        .'|delete/([^/]++)(*:639)'
                        .'|update/([^/]++)(*:662)'
                    .')'
                .')'
                .'|/c(?'
                    .'|art/(?'
                        .'|add(?'
                            .'|/([^/]++)(*:699)'
                            .'|1/([^/]++)(*:717)'
                        .')'
                        .'|remove/([^/]++)(*:741)'
                        .'|delete(?'
                            .'|/([^/]++)(*:767)'
                            .'|1/([^/]++)(*:785)'
                        .')'
                    .')'
                    .'|ommentaires/(?'
                        .'|([^/]++)(*:818)'
                        .'|delete/([^/]++)(*:841)'
                    .')'
                .')'
                .'|/de(?'
                    .'|tail/([^/]++)(*:870)'
                    .'|lete1/([^/]++)(*:892)'
                .')'
                .'|/re(?'
                    .'|clamation/(?'
                        .'|add/([^/]++)(*:932)'
                        .'|list/([^/]++)(*:953)'
                        .'|etat/([^/]++)(*:974)'
                    .')'
                    .'|sponse/delete(?'
                        .'|Rec/([^/]++)(*:1011)'
                        .'|/([^/]++)(*:1029)'
                    .')'
                    .'|ponse/(?'
                        .'|add/([^/]++)(*:1060)'
                        .'|update/([^/]++)(*:1084)'
                    .')'
                .')'
                .'|/utilisateurs/update/([^/]++)(*:1124)'
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
        213 => [[['_route' => 'admin_userdelete', '_controller' => 'App\\Controller\\AdminController::DeleteUser'], ['id'], null, null, false, true, null]],
        241 => [[['_route' => 'admin_demdelete', '_controller' => 'App\\Controller\\AdminController::DeleteDem'], ['id'], null, null, false, true, null]],
        264 => [[['_route' => 'admin_demaccept', '_controller' => 'App\\Controller\\AdminController::AcceptDem'], ['id'], null, null, false, true, null]],
        298 => [[['_route' => 'adminsupp', '_controller' => 'App\\Controller\\CommandeController::supprimercommande'], ['id'], null, null, false, true, null]],
        320 => [[['_route' => 'adminlignesupp', '_controller' => 'App\\Controller\\LigneCommandeController::supprimercommande'], ['id'], null, null, false, true, null]],
        354 => [[['_route' => 'adminmodif', '_controller' => 'App\\Controller\\CommandeController::modifiercommande'], ['id'], null, null, false, true, null]],
        383 => [[['_route' => 'mot_delete', '_controller' => 'App\\Controller\\VehiculeController::SupprimerMoto'], ['id'], null, null, false, true, null]],
        406 => [[['_route' => 'mot_update', '_controller' => 'App\\Controller\\VehiculeController::UpdateMoto'], ['id'], null, null, false, true, null]],
        444 => [[['_route' => 'ev_delete', '_controller' => 'App\\Controller\\EvenementController::Supprimer'], ['id'], null, null, false, true, null]],
        467 => [[['_route' => 'ev_update', '_controller' => 'App\\Controller\\EvenementController::Update'], ['id'], null, null, false, true, null]],
        504 => [[['_route' => 'r_delete', '_controller' => 'App\\Controller\\LivraisonControlleur::Supprimer'], ['id'], null, null, false, true, null]],
        524 => [[['_route' => 'liv_add', '_controller' => 'App\\Controller\\LivraisonControlleur::Add'], ['id'], null, null, false, true, null]],
        547 => [[['_route' => 'r_update', '_controller' => 'App\\Controller\\LivraisonControlleur::Update'], ['id'], null, null, false, true, null]],
        582 => [[['_route' => 'voi_delete', '_controller' => 'App\\Controller\\VehiculeController::SupprimerVoiture'], ['id'], null, null, false, true, null]],
        605 => [[['_route' => 'voi_update', '_controller' => 'App\\Controller\\VehiculeController::Update'], ['id'], null, null, false, true, null]],
        639 => [[['_route' => 'cam_delete', '_controller' => 'App\\Controller\\VehiculeController::SupprimerCamion'], ['id'], null, null, false, true, null]],
        662 => [[['_route' => 'cam_update', '_controller' => 'App\\Controller\\VehiculeController::UpdateCamion'], ['id'], null, null, false, true, null]],
        699 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        717 => [[['_route' => 'cart_add1', '_controller' => 'App\\Controller\\CartController::add1'], ['id'], null, null, false, true, null]],
        741 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        767 => [[['_route' => 'cart_delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        785 => [[['_route' => 'cart_delete1', '_controller' => 'App\\Controller\\CartController::delete1'], ['id'], null, null, false, true, null]],
        818 => [[['_route' => 'commentaires', '_controller' => 'App\\Controller\\CommentairesController::index'], ['id'], null, null, false, true, null]],
        841 => [[['_route' => 'com_delete', '_controller' => 'App\\Controller\\CommentairesController::Supprimer'], ['id'], null, null, false, true, null]],
        870 => [[['_route' => 'ev_front_detail', '_controller' => 'App\\Controller\\EvenementController::detail'], ['id'], null, null, false, true, null]],
        892 => [[['_route' => 'delete1', '_controller' => 'App\\Controller\\FrontController::delete1'], ['id'], null, null, false, true, null]],
        932 => [[['_route' => 'r_add', '_controller' => 'App\\Controller\\ReclamationController::add'], ['id'], null, null, false, true, null]],
        953 => [[['_route' => 'r_list', '_controller' => 'App\\Controller\\ReclamationController::afficher'], ['value'], null, null, false, true, null]],
        974 => [[['_route' => 'etat_rec', '_controller' => 'App\\Controller\\ReclamationController::afficheReponse'], ['id'], null, null, false, true, null]],
        1011 => [[['_route' => 'reclam_delete', '_controller' => 'App\\Controller\\ReponseController::Delete_reclamation'], ['id'], null, null, false, true, null]],
        1029 => [[['_route' => 'response_delete', '_controller' => 'App\\Controller\\ReponseController::Delete_reponse'], ['id'], null, null, false, true, null]],
        1060 => [[['_route' => 'rep_add', '_controller' => 'App\\Controller\\ReponseController::addResponse'], ['id'], null, null, false, true, null]],
        1084 => [[['_route' => 'reponse_update', '_controller' => 'App\\Controller\\ReponseController::update_reponse'], ['id'], null, null, false, true, null]],
        1124 => [
            [['_route' => 'userupdate', '_controller' => 'App\\Controller\\UtilisateursController::Update'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
