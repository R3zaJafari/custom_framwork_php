<?php

$heading = 'Home';



$uri = $_SERVER['REQUEST_URI'];
//alan in chejori dare car mikone ??
//uri dar function chejori shenakhte mishe

 

view('index.view.php' , [
    'heading' => 'Home'
]);