<?php


class Database
{

    private static $pdo;



    public function __construct()
    {
if(is_null(self::$pdo)) {
            self::$pdo = new \PDO("mysql:host=localhost;dbname=td1", 'root', '');
            self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

}
//return self::$pdo;
    }

    public static function getPDO(){

        return self::$pdo;
    }
}