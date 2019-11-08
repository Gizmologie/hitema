<?php
/**
 * Created by PhpStorm.
 * User: Aurélien
 * Date: 06/11/2019
 * Time: 13:49
 */

namespace App\Controller;



class TeamController extends AbstractController
{
    const MEMBER = [
    'aurelien-guillemot' => ['id' => 1, 'nom' => 'guillemot', 'prenom' => 'aurelien', 'email' => 'aurelienguillemot@hotmail.fr'],
    'maxime-dubost' => ['id' => 2, 'nom' => 'dubost', 'prenom' => 'maxime', 'email' => 'maximedubost@hotmail.fr'],
    'christ-ulce' => ['id' => 3, 'nom' => 'ulce', 'prenom' => 'christ', 'email' => 'christulce@hotmail.fr'],
];

    public function index():void
    {
        $this->render('team/index');
    }

    public function list() : void
    {
        $this->render('team/list',
            [
                'fullList' => SELF::MEMBER,
            ]);
    }

    public function detail(array $uriVars):void
    {
        $this->render('team/details', [
            'nom' => SELF::MEMBER[$uriVars['fullname']]['nom'],
            'prenom' => SELF::MEMBER[$uriVars['fullname']]['prenom'],
            'email' => SELF::MEMBER[$uriVars['fullname']]['email'],
            //'fullname'=> self::MEMBER[$uriVars['nom']]
        ]);
    }
}