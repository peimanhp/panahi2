<?php

    $serverName = 'localhost';
    $serverUserName = 'root';
    $serverPassword = '';
    $dataBaseName = 'panahi';

    try{
        $connect = new PDO("mysql:host=$serverName;dbname=$dataBaseName;charset=utf8",$serverUserName,$serverPassword);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "err occured!". $e->getMessage();
    }

?>
