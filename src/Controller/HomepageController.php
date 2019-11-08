<?php
/**
 * Created by PhpStorm.
 * User: Aurélien
 * Date: 05/11/2019
 * Time: 14:02
 */

namespace App\Controller;

use App\Controller\AbstractController;
use App\Repository\GameRepository;


class HomepageController extends AbstractController
{

    private $gameRepository;

    public function __construct(GameRepository $gameRepository)
    {
        $this->gameRepository = $gameRepository;
    }

    public function index(array $uriVars):void
    {
        $this->render('homepage/index', [
            'results' => $this->gameRepository->findAll()
        ]);
    }


}