﻿<?php
require_once('config/dbparam.php');

try {
    $hostname = $hName;
    $port = $dbPort;
    $dbname = $dbName;
    $username = $userName;
    $pw = $passWord;
    if(($deployType == "Live") || ($deployType == "Dev") || ($deployType == "UbuntuAzure"))
    {
        $dbh = new PDO ("pgsql:host=$hostname;port=$port;dbname=$dbname","$username","$pw");
    }
    if($deployType == "Azure")
    {
        new PDO ( "sqlsrv:server = tcp:$hostname,$port; Database = $dbname", "$username", "$pw");
    }
    
    
    $dbh->setAttribute(PDO::ATTR_PERSISTENT, true);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
}