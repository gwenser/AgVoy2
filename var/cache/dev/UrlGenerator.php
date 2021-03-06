<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'owner' => [[], ['_controller' => 'App\\Controller\\OwnerController::index'], [], [['text', '/owner']], [], []],
    'owner_show' => [['id'], ['_controller' => 'App\\Controller\\OwnerController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/owner']], [], []],
    'region_index' => [[], ['_controller' => 'App\\Controller\\RegionController::index'], [], [['text', '/backoffice/region/list/']], [], []],
    'region_new' => [[], ['_controller' => 'App\\Controller\\RegionController::new'], [], [['text', '/backoffice/region/new']], [], []],
    'region_show' => [['id'], ['_controller' => 'App\\Controller\\RegionController::show'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/backoffice/region']], [], []],
    'region_edit' => [['id'], ['_controller' => 'App\\Controller\\RegionController::edit'], ['id' => '\\d+'], [['text', '/edit'], ['variable', '/', '\\d+', 'id', true], ['text', '/backoffice/region']], [], []],
    'region_delete' => [['id'], ['_controller' => 'App\\Controller\\RegionController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/backoffice/region']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'room_index' => [[], ['_controller' => 'App\\Controller\\RoomController::index'], [], [['text', '/owner/room/list/']], [], []],
    'room_new' => [[], ['_controller' => 'App\\Controller\\RoomController::new'], [], [['text', '/owner/room/new']], [], []],
    'room_show' => [['id'], ['_controller' => 'App\\Controller\\RoomController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/owner/room']], [], []],
    'room_edit' => [['id'], ['_controller' => 'App\\Controller\\RoomController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/owner/room']], [], []],
    'room_delete' => [['id'], ['_controller' => 'App\\Controller\\RoomController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/owner/room']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'frontpage' => [[], ['_controller' => 'App\\Controller\\WebController::index'], [], [['text', '/']], [], []],
];
