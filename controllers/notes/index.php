<?php


$config = require('config.php');
$db = new Database($config['database']);

$heading = 'My notes';




$notes = $db->query('select * from notes WHERE user_id = 7 ')->get();


 
include('views/notes/index.view.php');