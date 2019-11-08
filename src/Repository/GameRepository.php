<?php
/**
 * Created by PhpStorm.
 * User: Aurélien
 * Date: 07/11/2019
 * Time: 15:28
 */

namespace App\Repository;


use App\Core\Database;

class GameRepository
{

    // propriétés
    // propriétés stockant la casse injectée dans l'injecteur de dépendances
    private $database;
    private $connection;

    // constructeur reçoit les dépendances en paramètre
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->connection = $this->database->connect();
    }


    public function findAll():array
    {
        $sql = "
        SELECT game.* FROM videogame.game
        ";

        $query = $this->connection->prepare($sql);
        $query->execute();
        //fetchAll : récupératio de plusieurs résultats
        $results = $query->fetchAll(\PDO::FETCH_CLASS, 'App\Entity\Game');
        return $results;
    }

}