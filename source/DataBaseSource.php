<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 14:08
 */

class DataBaseSource implements Source
{
    private $pdo;

    /**
     * DataBaseSource constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @todo should return HTML from DB
     */
    public function get()
    {

    }
}
