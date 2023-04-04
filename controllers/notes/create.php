<?php
use Core\Database;
use Core\Validator;

require(base_path('Core/validator.php'));

$config = require(base_path('config.php'));
$db = new Database($config['database']);


//  $validator = new Validator;
$errors = [];

if($_SERVER["REQUEST_METHOD"] == 'POST'){

   
    

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

view('/notes/create.view.php' , [
    'heading' => 'Create Note',
    'errors' => $errors 
]);