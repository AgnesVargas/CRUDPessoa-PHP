<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Connection
 *
 * @author 182100533
 */
require_once 'Config.php';
class Connection {
    //put your code here
    public static function getConnetion ($host, $dbName, $userName, $pass){
        $dns = "mysql:host=$host;dbname=$dbName;charset=UTF8";
        try{
            $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            return new PDO($dns, $userName, $pass, $option);
        } catch (Exception $ex) {
            die($ex->getMessage());

        }
    }
    
}
return Connection::getConnetion($host, $dbName, $user, $pass);
