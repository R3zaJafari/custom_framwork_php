<?php

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