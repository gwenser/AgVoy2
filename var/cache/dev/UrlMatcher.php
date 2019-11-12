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
        '/owner' => [[['_route' => 'owner', '_controller' => 'App\\Controller\\OwnerController::index'], null, null, null, false, false, null]],
        '/backoffice/region/list' => [[['_route' => 'region_index', '_controller' => 'App\\Controller\\RegionController::index'], null, null, null, true, false, null]],
        '/backoffice/region/new' => [[['_route' => 'region_new', '_controller' => 'App\\Controller\\RegionController::new'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/owner/room/list' => [[['_route' => 'room_index', '_controller' => 'App\\Controller\\RoomController::index'], null, null, null, true, false, null]],
        '/owner/room/new' => [[['_route' => 'room_new', '_controller' => 'App\\Controller\\RoomController::new'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'frontpage', '_controller' => 'App\\Controller\\WebController::index'], null, null, null, false, false, null]],
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
                .'|/owner/(?'
                    .'|([^/]++)(*:187)'
                    .'|room/([^/]++)(?'
                        .'|(*:211)'
                        .'|/edit(*:224)'
                        .'|(*:232)'
                    .')'
                .')'
                .'|/backoffice/region/(?'
                    .'|(\\d+)(*:269)'
                    .'|(\\d+)/edit(*:287)'
                    .'|(\\d+)(*:300)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'owner_show', '_controller' => 'App\\Controller\\OwnerController::show'], ['id'], null, null, false, true, null]],
        211 => [[['_route' => 'room_show', '_controller' => 'App\\Controller\\RoomController::show'], ['id'], null, null, false, true, null]],
        224 => [[['_route' => 'room_edit', '_controller' => 'App\\Controller\\RoomController::edit'], ['id'], null, null, false, false, null]],
        232 => [[['_route' => 'room_delete', '_controller' => 'App\\Controller\\RoomController::delete'], ['id'], null, null, false, true, null]],
        269 => [[['_route' => 'region_show', '_controller' => 'App\\Controller\\RegionController::show'], ['id'], null, null, false, true, null]],
        287 => [[['_route' => 'region_edit', '_controller' => 'App\\Controller\\RegionController::edit'], ['id'], null, null, false, false, null]],
        300 => [
            [['_route' => 'region_delete', '_controller' => 'App\\Controller\\RegionController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
