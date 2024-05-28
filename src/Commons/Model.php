<?php

namespace Assignment\Php2News\Commons;

use Doctrine\DBAL\DriverManager;

class Model
{

    protected $connect;

    protected $queryBuilder;

    public function __construct()
    {
        try {
            $connectionParams = [
                'host'      =>  $_ENV['DB_HOST'],
                'port'      =>  $_ENV['DB_PORT'],
                'user'      =>  $_ENV['DB_USERNAME'],
                'password'  =>  $_ENV['DB_PASSWORD'],
                'dbname'    =>  $_ENV['DB_DATABASE'],
                'charset'   =>  $_ENV['DB_CHARSET'],
                'driver'    =>  'pdo_mysql'
            ];

            $this->connect = DriverManager::getConnection($connectionParams);

            $this->queryBuilder = $this->connect->createQueryBuilder();
            
        } catch (\PDOException $e) {
            Helper::debug($e);
        }
    }

    public function __destruct()
    {
        $this->connect = null;
    }
}
