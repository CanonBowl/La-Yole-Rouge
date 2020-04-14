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
        '/' => [
            [['_route' => 'homepage', '_controller' => 'App\\Controller\\HomePageController::index'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\HomePageController::index'], null, null, null, false, false, null],
        ],
        '/Accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\HomePageController::accueil'], null, null, null, false, false, null]],
        '/AjouterReservation' => [[['_route' => 'AjouterReservation', '_controller' => 'App\\Controller\\ReservationController::ajout'], null, null, null, false, false, null]],
        '/Reservations' => [[['_route' => 'Reservations', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/Admin/Reservations' => [[['_route' => 'Admin_Reservations', '_controller' => 'App\\Controller\\ReservationController::index_admin'], null, null, null, false, false, null]],
        '/app_login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/Informations' => [[['_route' => 'informations', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/Enregistrement' => [[['_route' => 'enregistrement', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
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
                .'|/Admin/(?'
                    .'|Reservations/(?'
                        .'|([^/]++)(*:203)'
                        .'|Gerer/([^/]++)(*:225)'
                    .')'
                    .'|Informations/([^/]++)(*:255)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        203 => [[['_route' => 'Admin_Liste_Reservations', '_controller' => 'App\\Controller\\ReservationController::afficher_reservations'], ['id'], null, null, false, true, null]],
        225 => [[['_route' => 'Admin_Gerer_Reservations', '_controller' => 'App\\Controller\\ReservationController::gerer_reservation'], ['id'], null, null, false, true, null]],
        255 => [
            [['_route' => 'show_user', '_controller' => 'App\\Controller\\UserController::show_user'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
