<?php
/**
 * Created by PhpStorm.
 * User: Aurélien
 * Date: 07/11/2019
 * Time: 11:39
 */
namespace App\SQL;

/*
 * script lancé en ligne de commande : pas d'autochargement
 */

use App\Core\Database;

require_once __DIR__ . '/../../vendor/autoload.php';

class MainSQL
{
    private $sql = "
    START TRANSACTION;
    DROP DATABASE IF EXISTS videogame;
    CREATE DATABASE videogame;
    CREATE TABLE videogame.game(
        id TINYINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(50),
        price DECIMAL(5,2),
        date DATE,
        poster VARCHAR(50),
        editor VARCHAR(50)
    );
    INSERT INTO videogame.game VALUES 
    (NULL, 'tamagotchi', '10.90', '1980-01-10', 'tamagotchi.jpg', 'JCVD'),
    (NULL, 'mario bros', '20.99', '2001-01-10', 'mario.jpg', 'plombier'),
    (NULL, 'monopoly', '38.98', '2009-12-04', 'monopoly.jpg', 'capitaliste');
        
    COMMIT;
    ";

    public function execute():void
    {
        $database = new Database();
        $connection = $database->connect();
        var_dump($connection);

        $query = $connection->prepare($this->sql);
        $query->execute();
    }
}

$mainSQL = new MainSQL();
$mainSQL->execute();