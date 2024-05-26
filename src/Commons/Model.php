<?php

namespace Assignment\Php2News\Commons;

class Model extends Helper
{

    protected \PDO|null $connect;

    public function __construct()
    {
        try {
            $this->connect = new \PDO(
                "mysql:host={$_ENV["DB_HOST"]};
                port={$_ENV["DB_PORT"]};
                dbname={$_ENV["DB_DATABASE"]};
                charset={$_ENV["DB_CHARSET"]}",
                $_ENV["DB_USERNAME"],
                $_ENV["DB_PASSWORD"]
            );

            // Setup mode báo lỗi và xử lý ngoại lệ
            $this->connect->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            // Setup mode trả về dữ liệu
            $this->connect->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
            
        } catch (\PDOException $e) {
            $this->debug($e);
        }
    }

    public function __destruct()
    {
        $this->connect = null;
    }
}
