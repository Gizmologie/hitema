<?php
/**
 * Created by PhpStorm.
 * User: Aurélien
 * Date: 05/11/2019
 * Time: 16:29
 */

namespace App\Controller;

use App\Controller\AbstractController;

class NotfoundController extends AbstractController
{
    public function index(array $uriVars):void
    {
        $this->render('notfound/index');
    }
}