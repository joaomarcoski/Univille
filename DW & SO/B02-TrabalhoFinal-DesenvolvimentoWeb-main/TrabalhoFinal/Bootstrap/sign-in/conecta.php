<?php
    try{
        $connection = new PDO("mysql:host=127.0.0.1;dbname=efja;charset=utf8", "root", ""); 
    }catch(PDOexception $error){
        die($error -> getMessage());
    }
?>
