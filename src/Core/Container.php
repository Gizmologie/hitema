<?php
/**
 * Created by PhpStorm.
 * User: Aurélien
 * Date: 06/11/2019
 * Time: 09:28
 */

namespace App\Core;

/*
 * Classe dédié à l'instanciation des objets
 */

use App\Controller\HomepageController;
use App\Controller\NotfoundController;
use App\Controller\GameController;
use App\Controller\TeamController;
use App\Repository\GameRepository;


class Container
{
    // liste des services()

    private $services = [];

    public function __construct()
    {
        /*
         * clé : identifiant au service
         */
        $this->services = [
            'core.router' => function (){ return new Router(); },
            'core.database' => function (){ return new Database(); },
            'controller.homepage' => function () {return new HomepageController(
                $this->services['repository.game']()
            );},
            'controller.team' => function () {return new TeamController();},
            'controller.notfound' => function () {return new NotfoundController();},
            'controller.game' => function () {return new GameController();},
            'repository.game' => function () {return new GameRepository(
                $this->services['core.database']()
            );}
        ];
    }

    public function getService(string $serviceName)
    {
        //var_dump( $this->services, $serviceName);
        return $this->services[$serviceName]();
    }
}