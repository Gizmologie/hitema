<?php
/**
 * Created by PhpStorm.
 * User: Aurélien
 * Date: 07/11/2019
 * Time: 11:12
 */

namespace App\Core;


class Database
{
    const HOST = 'localhost';
    const DB_NAME = 'videogame';
    const USER = 'root';
    const PWD = '';

    // connexion
    private $connection;

    public function __construct()
    {
        // \ : acceder aux classes natives du PHP
        /*
         * description de la connexion
         * utilisateur
         * mot de passe
         * option de connexion
         */

        $this->connection = new \PDO(
            'mysql:host=' . self::HOST . '; dbname=' . self::DB_NAME . '; charset=utf8',
            self::USER,
            self::PWD,
            [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]
        );
    }

    public function connect ():\PDO
    {
        return $this->connection;
    }
}