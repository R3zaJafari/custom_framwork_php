<?php
namespace Core ;

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = require base_path('route.php');

// if($uri == '/'){
//     require('controllers/index.php');
// } elseif($uri == '/about'){
//     require('controllers/about.php');
// } elseif($uri == '/contact')
// // چرا وقتی اسلش نمیگزاریم پشت contract باز مارو میبره به یک ضفحه ای که وجود نداره
//  {
//     require('controllers/contact.php');
// }





function routeToController($uri , $routes) {
    if(array_key_exists($uri , $routes)){
        require base_path($routes[$uri]);
    } else {
        abort();
    }
}

routeToController($uri , $routes);


function abort($code = 404){
    http_response_code($code);
    
    require "views/$code.php";

    die();
}