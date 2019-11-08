<?php
/**
 * Created by PhpStorm.
 * User: Aurélien
 * Date: 08/11/2019
 * Time: 10:03
 */

namespace App\Controller;

use App\Form\GameForm;

class GameController extends AbstractController
{
    public  function form ($uriVars)
    {
        $form = new GameForm();

        $this->render('game/form',
            [
                'form' => $form
            ]);
    }
}