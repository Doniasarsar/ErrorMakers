<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'admin_dashboard' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin/dashboard']], [], []],
    'admin_userlist' => [[], ['_controller' => 'App\\Controller\\AdminController::afficherUser'], [], [['text', '/admin/dashboard/listU']], [], []],
    'admin_demandelist' => [[], ['_controller' => 'App\\Controller\\AdminController::afficherDemande'], [], [['text', '/admin/dashboard/listD']], [], []],
    'admin_userdelete' => [['id'], ['_controller' => 'App\\Controller\\AdminController::DeleteUser'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/dashboard/listU/delete']], [], []],
    'admin_demdelete' => [['id'], ['_controller' => 'App\\Controller\\AdminController::DeleteDem'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/dashboard/listD/delete']], [], []],
    'admin_demaccept' => [['id'], ['_controller' => 'App\\Controller\\AdminController::AcceptDem'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/dashboard/listD/accept']], [], []],
    'admin_loginadmin' => [[], ['_controller' => 'App\\Controller\\AdminController::login'], [], [['text', '/admin/loginadmin']], [], []],
    'admin_logoutadmin' => [[], ['_controller' => 'App\\Controller\\AdminController::logout'], [], [['text', '/admin/logout']], [], []],
    'cart_index' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart/']], [], []],
    'cart_add' => [['id'], ['_controller' => 'App\\Controller\\CartController::add'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/add']], [], []],
    'cart_add1' => [['id'], ['_controller' => 'App\\Controller\\CartController::add1'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/add1']], [], []],
    'cart_remove' => [['id'], ['_controller' => 'App\\Controller\\CartController::remove'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/remove']], [], []],
    'cart_delete' => [['id'], ['_controller' => 'App\\Controller\\CartController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/delete']], [], []],
    'cart_delete1' => [['id'], ['_controller' => 'App\\Controller\\CartController::delete1'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/delete1']], [], []],
    'cart_deleteall' => [[], ['_controller' => 'App\\Controller\\CartController::deleteall'], [], [['text', '/cart/deleteall']], [], []],
    'commande' => [[], ['_controller' => 'App\\Controller\\CommandeController::ajoutercommande'], [], [['text', '/commande']], [], []],
    'admincommande' => [[], ['_controller' => 'App\\Controller\\CommandeController::afficher'], [], [['text', '/admin/affcommande']], [], []],
    'adminsupp' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::supprimercommande'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/suppcommande']], [], []],
    'adminmodif' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::modifiercommande'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/modifcommande']], [], []],
    'commentaires' => [['id'], ['_controller' => 'App\\Controller\\CommentairesController::index'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/commentaires']], [], []],
    'com_delete' => [['id'], ['_controller' => 'App\\Controller\\CommentairesController::Supprimer'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/commentaires/delete']], [], []],
    'demande' => [[], ['_controller' => 'App\\Controller\\DemandeController::index'], [], [['text', '/demande']], [], []],
    'acteurSAdd' => [[], ['_controller' => 'App\\Controller\\DemandeController::AddActeur'], [], [['text', '/demande/addActeur']], [], []],
    'evenement1' => [[], ['_controller' => 'App\\Controller\\EvenementController::index'], [], [['text', '/evenement1']], [], []],
    'ev_aff' => [[], ['_controller' => 'App\\Controller\\EvenementController::afficher'], [], [['text', '/evenement/aff']], [], []],
    'event_add' => [[], ['_controller' => 'App\\Controller\\EvenementController::Add'], [], [['text', '/evenement/add']], [], []],
    'ev_delete' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::Supprimer'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/evenement/delete']], [], []],
    'ev_update' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::Update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/evenement/update']], [], []],
    'ev_front_detail' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::detail'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/detail']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\FrontController::index'], [], [['text', '/home']], [], []],
    'delete1' => [['id'], ['_controller' => 'App\\Controller\\FrontController::delete1'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/delete1']], [], []],
    'ev_front_aff' => [[], ['_controller' => 'App\\Controller\\FrontController::afficherevenement'], [], [['text', '/eventfront']], [], []],
    'ligne_commande' => [[], ['_controller' => 'App\\Controller\\LigneCommandeController::index'], [], [['text', '/ligne/commande']], [], []],
    'adminlignesupp' => [['id'], ['_controller' => 'App\\Controller\\LigneCommandeController::supprimercommande'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/suppligne']], [], []],
    'livraison_controlleur' => [[], ['_controller' => 'App\\Controller\\LivraisonControlleur::index'], [], [['text', '/livraison/controlleur']], [], []],
    'r_delete' => [['id'], ['_controller' => 'App\\Controller\\LivraisonControlleur::Supprimer'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/livraison/delete']], [], []],
    'liv_add' => [['id'], ['_controller' => 'App\\Controller\\LivraisonControlleur::Add'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/livraison/add']], [], []],
    'r_update' => [['id'], ['_controller' => 'App\\Controller\\LivraisonControlleur::Update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/livraison/update']], [], []],
    'reclamation' => [[], ['_controller' => 'App\\Controller\\ReclamationController::index'], [], [['text', '/reclamation']], [], []],
    'r_add' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::add'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reclamation/add']], [], []],
    'r_list' => [['value'], ['_controller' => 'App\\Controller\\ReclamationController::afficher'], [], [['variable', '/', '[^/]++', 'value'], ['text', '/reclamation/list']], [], []],
    'etat_rec' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::afficheReponse'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reclamation/etat']], [], []],
    'reponse' => [[], ['_controller' => 'App\\Controller\\ReponseController::index'], [], [['text', '/reponse']], [], []],
    'list_reclamation' => [[], ['_controller' => 'App\\Controller\\ReponseController::afficher'], [], [['text', '/reponse/recList']], [], []],
    'reclam_delete' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::Delete_reclamation'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/response/deleteRec']], [], []],
    'rep_add' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::addResponse'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reponse/add']], [], []],
    'reponse_list' => [[], ['_controller' => 'App\\Controller\\ReponseController::afficher_reponses'], [], [['text', '/reponse/list']], [], []],
    'response_delete' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::Delete_reponse'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/response/delete']], [], []],
    'reponse_update' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::update_reponse'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reponse/update']], [], []],
    'utilisateurs' => [[], ['_controller' => 'App\\Controller\\UtilisateursController::index'], [], [['text', '/utilisateurs']], [], []],
    'userAdd' => [[], ['_controller' => 'App\\Controller\\UtilisateursController::AddUser'], [], [['text', '/utilisateurs/add']], [], []],
    'userupdate' => [['id'], ['_controller' => 'App\\Controller\\UtilisateursController::Update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/utilisateurs/update']], [], []],
    'usercompte' => [[], ['_controller' => 'App\\Controller\\UtilisateursController::Compte'], [], [['text', '/utilisateurs/compte']], [], []],
    'passupdate' => [[], ['_controller' => 'App\\Controller\\UtilisateursController::EditPassword'], [], [['text', '/utilisateurs/updatepass']], [], []],
    'confirmuser' => [[], ['_controller' => 'App\\Controller\\UtilisateursController::ConfirmUser'], [], [['text', '/utilisateurs/confirmuser']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\UtilisateursController::login'], [], [['text', '/login']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\UtilisateursController::logout'], [], [['text', '/logout']], [], []],
    'vehicule' => [[], ['_controller' => 'App\\Controller\\VehiculeController::index'], [], [['text', '/vehicule']], [], []],
    'voi_list' => [[], ['_controller' => 'App\\Controller\\VehiculeController::afficherVoiture'], [], [['text', '/voiture/list']], [], []],
    'mot_list' => [[], ['_controller' => 'App\\Controller\\VehiculeController::afficherMoto'], [], [['text', '/moto/list']], [], []],
    'cam_list' => [[], ['_controller' => 'App\\Controller\\VehiculeController::afficherCamion'], [], [['text', '/camion/list']], [], []],
    'voi_delete' => [['id'], ['_controller' => 'App\\Controller\\VehiculeController::SupprimerVoiture'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/vehicule/delete']], [], []],
    'mot_delete' => [['id'], ['_controller' => 'App\\Controller\\VehiculeController::SupprimerMoto'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/vehicule/delete']], [], []],
    'cam_delete' => [['id'], ['_controller' => 'App\\Controller\\VehiculeController::SupprimerCamion'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/vehicule/delete']], [], []],
    'voi_add' => [[], ['_controller' => 'App\\Controller\\VehiculeController::AddVoiture'], [], [['text', '/voiture/add']], [], []],
    'voi_update' => [['id'], ['_controller' => 'App\\Controller\\VehiculeController::Update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/voiture/update']], [], []],
    'mot_add' => [[], ['_controller' => 'App\\Controller\\VehiculeController::AddMoto'], [], [['text', '/moto/add']], [], []],
    'mot_update' => [['id'], ['_controller' => 'App\\Controller\\VehiculeController::UpdateMoto'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/moto/update']], [], []],
    'cam_add' => [[], ['_controller' => 'App\\Controller\\VehiculeController::AddCamion'], [], [['text', '/camion/add']], [], []],
    'cam_update' => [['id'], ['_controller' => 'App\\Controller\\VehiculeController::UpdateCamion'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/camion/update']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\FrontController::index'], [], [['text', '/']], [], []],
];
