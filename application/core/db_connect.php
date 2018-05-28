<?php
/*    $host = 'localhost';
    $database = 'shop';
    $user = 'admin';
    $password = '1234';

$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));*/

class DB_Connect
{
    private static $host = 'localhost';
    private static $database = 'shop';
    private static $user = 'admin';
    private static $password = '1234';

    public static function get_connect()
    {
        $link = mysqli_connect(self::$host, self::$user, self::$password, self::$database)
        or die("Ошибка " . mysqli_error($link));
        return $link;
    }


}