<?php
use core\database;



$config =require ("../webpage/config.php");
$db =new database($config['database']);


$heading= "Note";
$currentuserid=2;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
$note = $db->query('SELECT * from notes where id = :id',
['id'=>$_GET['id']])->findorfail();
authorize($note['user_id'] ===  $currentuserid);

  $db->query('delete from notes where id = :id',[
    'id'=>$_GET['id']
   ]);
    header('location: webpage/notes');
    exit();
}
else{

$note = $db->query('SELECT * from notes where id = :id',
['id'=>$_GET['id']])->findorfail();
authorize($note['user_id'] !==  $currentuserid);

require "../webpage/view/notes/show.view.php";
}

