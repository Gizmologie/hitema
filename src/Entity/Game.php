<?php
/**
 * Created by PhpStorm.
 * User: Aurélien
 * Date: 07/11/2019
 * Time: 14:40
 */

namespace App\Entity;


class Game
{
    private $id;
    private $name;
    private $price;
    private $date;
    private $poster;
    private $editor;

    public function setId ($var):void {$this->id = $var;}
    public function getId ():?int {return $this->id;}

    public function setName ($var):string {$this->name = $var;}
    public function getName ():?string {return $this->name;}

    public function setPrice ($var):float {$this->price = $var;}
    public function getPrice ():?float {return $this->price;}

    public function setDate ($var):string {$this->date = $var;}
    public function getDate ():?string {return $this->date;}

    public function setPoster ($var):string {$this->poster = $var;}
    public function getPoster ():?string {return $this->poster;}

    public function setEditor ($var):string {$this->editor = $var;}
    public function getEditor ():?string {return $this->editor;}
}