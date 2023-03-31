<?php


$config = require(base_path('config.php'));
$db = new Database($config['database']);





$notes = $db->query('select * from notes WHERE user_id = 7 ')->get();


 
view('/notes/index.view.php' , [
    'heading' => 'My notes' ,
    'notes'   => $notes 
]);