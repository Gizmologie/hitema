<?php
/**
 * Created by PhpStorm.
 * User: Aurélien
 * Date: 05/11/2019
 * Time: 16:48
 */

namespace App\Controller;


abstract class AbstractController
{
    protected function render(string $template, array $data= []):void
    {
        extract($data);
        require_once __DIR__ . "/../../templates/$template.php";
    }
}