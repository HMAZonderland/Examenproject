<?php
/**
 * Created by PhpStorm.
 * User: Combidi
 * Date: 23/01/16
 * Time: 13:21
 */

namespace ANPNews\Repository;


abstract class Repository
{
    protected $db;

    public function __construct(\PDO $pdo)
    {
        $this->db = $pdo;
    }
}