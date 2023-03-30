<?php


$config = require('config.php');
$db = new Database($config['database']);

$heading = 'note';
$currentUserId = 7;

$id = $_GET['id'];


$note = $db->query('select * from notes WHERE  id = :id ', [

    'id' => $id,

])->findOrFail();


authorize($note['user_id'] == $currentUserId);


 
include('views/notes/show.view.php');