<?php
//CSS路由
function route_class(){

    return str_replace('.', '-', Route::currentRouteName());
}
