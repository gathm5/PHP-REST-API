<?php

class Database extends PDO
{

    function __construct()
    {
        parent::__construct("mysql:host=findeasyrentals.db.9229429.hostedresource.com;dbname=findeasyrentals", "findeasyrentals", "Renteasy!1");
    }


}