<?php
//  الان اصلا از کجا میفهمه که باید این صفحه رو باز کنه چرا function رو باز نمیکنه


const BASE_PATH = __DIR__ . '/../' ;


require(BASE_PATH . 'function.php');


require(base_path('Database.php'));

require(base_path('response.php'));

require(base_path('router.php'));


//سوال =>وقتی اینا لود میشن مثلا route.php دیگه dataBasa.php لود نمیشه

