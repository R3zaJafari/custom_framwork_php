<?php

use Core\Response;

function dd($value)
{
echo '<pre>';
var_dump($value);
echo '</pre>';
die();
}


function urlIs($value){
    // return $uri == $value ;  چرا این کار نمیکنه
    return $_SERVER['REQUEST_URI'] == $value;
}


function authorize($condition , $status = Response::FORBIDDEN )
{
    if(!$condition){
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path ;
}

function view($path , $attributes = [])
{
    extract($attributes);
    
    require base_path('views/' . $path) ;
    
}