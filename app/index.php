<?php

$controller = isset($_GET['controller'])?   $_GET['controller']:'donor';
$action     = isset($_GET['action'])?       $_GET['action']:'index';
$controller = ucfirst($controller);
//Biến Controller được nối thêm chuỗi Controller
$controller .= 'Controller';
//Đường dẫn tới các file php trong Controller
$controllerPath = 'controllers/'.$controller.'.php';

if(!file_exists($controllerPath)){
    die('Lỗi! Controller này không tồn tại');
}
require_once($controllerPath);
$myObj = new $controller();  
$myObj->$action();

