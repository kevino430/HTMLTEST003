<?php

$request = $_SERVER['REQUEST_URI'];

// 检查请求是否指向静态文件
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $request)) {
    // 对于静态文件，尝试直接返回这些文件
    // 返回 false 以允许服务器的默认处理方式，不需要修改此行
    return false;
} else {
    // 对于其他所有请求，包含 index.php
    include('index.php');
}
