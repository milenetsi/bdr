<?php

class MyUserClass
{
    private $dbconn;

    function __construct()
    {
        $this->dbconn  = new DatabaseConnection('localhost', 'user', 'password');
    }

    public function getUserList()
    {
        $results = $this->dbconn->query('select name from user ORDER BY name');

        return $results;
    }
}