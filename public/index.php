<?php
//  الان اصلا از کجا میفهمه که باید این صفحه رو باز کنه چرا function رو باز نمیکنه

// C:\Users\TRJ\Desktop\php core\afterDubai\public
const BASE_PATH = __DIR__ . '/../' ;


require(BASE_PATH . 'function.php');


spl_autoload_register(function ($class) {
    require base_path("Core/{$class}.php");
});

require(base_path('router.php'));


//سوال =>وقتی اینا لود میشن مثلا route.php دیگه dataBasa.php لود نمیشه

