<?php 

namespace App;

class Database{

   // database the collection
    public static function db_connection(){
       $host = "localhost";
       $user = "root";
       $pass = "";
       $db   = "blog";

       $link = mysqli_connect($host, $user, $pass, $db);

       return $link;
    }


    
}