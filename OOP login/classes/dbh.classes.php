<?php


 class Dbh{
 public function connect(){
    try{
       $username = "root";
       $password = "";
       $dbh = new PDO('mysql:host=localhost;dbname=ooplogin', $username, $password);
       return $dbh;
    }
    catch(PDOException $e){
echo "Error: " . $e->getMessage() . "<br/>";
die();
    }
    }
}