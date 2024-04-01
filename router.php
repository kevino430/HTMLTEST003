<?php

// $request = $_SERVER['REQUEST_URI'];

// // 检查请求是否指向静态文件
// if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|eot|woff2|woff|ttf|svg)$/', $request)) {
//     // Serve the static files directly.
//     return false;
// } else {
//     // Include 'index.php' for all other requests.
//     include('index.php');
// }


// 对所有文件路径返回 false，让内建服务器自己处理。
return false;