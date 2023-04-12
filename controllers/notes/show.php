<?php
use Core\Database;

$config = require(base_path('config.php'));
$db = new Database($config['database']);

$currentUserId = 7; 
$id = $_GET['id'];

if($_SERVER['REQUEST_METHOD'] == 'POST' ){
    //form was submitted , delete the current note

    $note = $db->query('select * from notes WHERE  id = :id ', [

        'id' => $id,
    
    ])->findOrFail();
    
    
    authorize($note['user_id'] == $currentUserId);


    $db->query('delete from notes WHERE id=:id' , [
        'id' => $id ,
    ]);

    header('location: /notes');
    exit() ;
   
}else{

    $note = $db->query('select * from notes WHERE  id = :id ', [

        'id' => $id,
    
    ])->findOrFail();
    
    
    authorize($note['user_id'] == $currentUserId);
    
    view('/notes/show.view.php' , [
        'heading' => 'note' ,
        'note' => $note
    ]);
}





 
