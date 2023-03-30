<?php
require('validator.php');

$config = require('config.php');
$db = new Database($config['database']);
$heading = 'Create Note';

// $validator = new Validator();

if($_SERVER["REQUEST_METHOD"] == 'POST'){

    $errors = [];

    

    if(! Validator::string($_POST['body'] , 1 , 10 )   )
    {
        $errors['body'] = 'A body of no more then 100 is cherecter required';
    }




    if(empty($errors['body']))
    {
        $db->query('INSERT into notes(body , user_id) VALUES(:body  , :user_id)' , [
            'body' => $_POST['body'], 
            'user_id' => 7
        ]); 

    }

}

require('views/notes/create.view.php');