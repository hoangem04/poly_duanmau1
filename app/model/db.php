<?php

namespace  App\model;

use PDO;

require_once "erv.php";
class db
{
    function getConnect()
    {
        $connect = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=" . DBCHARSET, DBUSER, DBPASS);
        return $connect;
    }
    function getData($query, $getAll = true)
    {

        $conn = $this->getConnect();
        $stml = $conn->prepare($query);
        $stml->execute();
        if ($getAll) {
            return $stml->fetchAll();
        }
        return $stml->fetch();
    }
}
