<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/championship' => [[['_route' => 'championship_index', '_controller' => 'App\\Controller\\ChampionshipController::index'], null, ['GET' => 0], null, true, false, null]],
        '/championship/new' => [[['_route' => 'championship_new', '_controller' => 'App\\Controller\\ChampionshipController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/competition' => [[['_route' => 'competition_index', '_controller' => 'App\\Controller\\CompetitionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/competition/new' => [[['_route' => 'competition_new', '_controller' => 'App\\Controller\\CompetitionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/match' => [[['_route' => 'match_index', '_controller' => 'App\\Controller\\MatchController::index'], null, ['GET' => 0], null, true, false, null]],
        '/match/new' => [[['_route' => 'match_new', '_controller' => 'App\\Controller\\MatchController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/player' => [[['_route' => 'player_index', '_controller' => 'App\\Controller\\PlayerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/player/new' => [[['_route' => 'player_new', '_controller' => 'App\\Controller\\PlayerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/stade' => [[['_route' => 'stade_index', '_controller' => 'App\\Controller\\StadeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/stade/new' => [[['_route' => 'stade_new', '_controller' => 'App\\Controller\\StadeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/team' => [[['_route' => 'team_index', '_controller' => 'App\\Controller\\TeamController::index'], null, ['GET' => 0], null, true, false, null]],
        '/team/new' => [[['_route' => 'team_new', '_controller' => 'App\\Controller\\TeamController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/c(?'
                    .'|hampionship/([^/]++)(?'
                        .'|(*:70)'
                        .'|/edit(*:82)'
                        .'|(*:89)'
                    .')'
                    .'|ompetition/([^/]++)(?'
                        .'|(*:119)'
                        .'|/edit(*:132)'
                        .'|(*:140)'
                    .')'
                .')'
                .'|/match/([^/]++)(?'
                    .'|(*:168)'
                    .'|/edit(*:181)'
                    .'|(*:189)'
                .')'
                .'|/player/([^/]++)(?'
                    .'|(*:217)'
                    .'|/edit(*:230)'
                    .'|(*:238)'
                .')'
                .'|/stade/([^/]++)(?'
                    .'|(*:265)'
                    .'|/edit(*:278)'
                    .'|(*:286)'
                .')'
                .'|/team/([^/]++)(?'
                    .'|(*:312)'
                    .'|/edit(*:325)'
                    .'|(*:333)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        70 => [[['_route' => 'championship_show', '_controller' => 'App\\Controller\\ChampionshipController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        82 => [[['_route' => 'championship_edit', '_controller' => 'App\\Controller\\ChampionshipController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        89 => [[['_route' => 'championship_delete', '_controller' => 'App\\Controller\\ChampionshipController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        119 => [[['_route' => 'competition_show', '_controller' => 'App\\Controller\\CompetitionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        132 => [[['_route' => 'competition_edit', '_controller' => 'App\\Controller\\CompetitionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        140 => [[['_route' => 'competition_delete', '_controller' => 'App\\Controller\\CompetitionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        168 => [[['_route' => 'match_show', '_controller' => 'App\\Controller\\MatchController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        181 => [[['_route' => 'match_edit', '_controller' => 'App\\Controller\\MatchController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        189 => [[['_route' => 'match_delete', '_controller' => 'App\\Controller\\MatchController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        217 => [[['_route' => 'player_show', '_controller' => 'App\\Controller\\PlayerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        230 => [[['_route' => 'player_edit', '_controller' => 'App\\Controller\\PlayerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        238 => [[['_route' => 'player_delete', '_controller' => 'App\\Controller\\PlayerController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        265 => [[['_route' => 'stade_show', '_controller' => 'App\\Controller\\StadeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        278 => [[['_route' => 'stade_edit', '_controller' => 'App\\Controller\\StadeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        286 => [[['_route' => 'stade_delete', '_controller' => 'App\\Controller\\StadeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        312 => [[['_route' => 'team_show', '_controller' => 'App\\Controller\\TeamController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        325 => [[['_route' => 'team_edit', '_controller' => 'App\\Controller\\TeamController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        333 => [
            [['_route' => 'team_delete', '_controller' => 'App\\Controller\\TeamController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
