<?php
use think\Route;
// 设置路由之后，就不能使用pathinfo访问了
Route::rule('/','News/read');
Route::get('test/:id','News/test',[
    'cache'=>[ 'test/:id/:page',3600]
]);

?>