<?php
require "./core/validator.php";
$config =require ("config.php");
use core\database;
$db =new database($config['database']);

$heading="Create Note";


if($_SERVER['REQUEST_METHOD'] === 'POST'){

     $errors=[];
     if(! validator::string($_POST['body'], 1 , 1000)){

        $errors['body']= 'A body of no more than 1000 is required';
     }
     if(empty($errors)){
        $db->query('INSERT INTO NOTES(body,user_id) VALUES (:body, :user_id )', [
            'body'=> $_POST['body'],
            'user_id'=> 1
        ]);
     }

}
require "../webpage/view/notes/create.view.php";