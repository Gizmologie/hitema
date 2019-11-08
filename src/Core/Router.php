<?php
/**
 * Created by PhpStorm.
 * User: Aurélien
 * Date: 05/11/2019
 * Time: 11:00
 */

namespace App\Core;


class Router
{

    public function __construct()
    {

    }

    /*
     * Listes des routes
     * Clé : motif d'expression rationelle
     *     ^ : débute par
     *     $ : termine par
     *     \d : chiffre
     *     [a-z] : minuscule
     *     + : 1 ou plusieurs
     */
    private $routes = [
    '#^/$#' => [
        //'controller' => 'HomepageController',
        'controller' => 'controller.homepage',
        'method' => 'index'
    ],
        '#^/team$#' => [
            'controller' => 'controller.team',
            'method' => 'list'
        ],
        '#^/team/(?<fullname>([a-z]+-[a-z]+))$#' => [
            'controller' => 'controller.team',
            'method' => 'detail'
        ],
        '#^/game$#' => [
            'controller' => 'controller.game',
            'method' => 'form'
        ]
];


    public function getRoute():array
    {
        // récupération de la route
        $uri = $_SERVER['REQUEST_URI'];
        $route = [
            'controller' => 'controller.notfound',
            'method' => 'index'
        ];

        foreach ($this->routes as $regex => $param)
        {
            if (preg_match($regex, $uri, $uriVars)){
                $route = $param;
                break;
            }
        }

        $route['uriVars'] = $uriVars;

        return $route;
    }
}