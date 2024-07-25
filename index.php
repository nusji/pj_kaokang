<?php
// index.php

// เริ่มต้น session ถ้าจำเป็น
session_start();

// กำหนด routing paths
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
        require 'public/index.html';
        break;
    case '/login':
        require 'src/login.php';
        break;
    case '/ingredients';
        require 'src/views/ingredients/list_ingredients.php';
        break;
        // เพิ่มกรณีอื่นๆ ตามต้องการ
    default:
        http_response_code(404);
        require '404.php';
        break;
}
