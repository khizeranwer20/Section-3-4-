<?php


use core\database;

$config =require ("../webpage/config.php");
$db =new database($config['database']);



// $query = "select from posts where id=:id";
// $posts =$db->query($query,[':id'=== $id])->fetchAll();

$heading= "My Notes";
$notes= $db->query('SELECT * from notes where user_id= 1')->finder();

require "../webpage/view/notes/index.view.php";


