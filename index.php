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
        require 'src/views/auth/login.php';
        break;
    case '/ingredients':
        if ($_SESSION['role'] === 'employee' || $_SESSION['role'] === 'owner') {
            require 'src/views/ingredients/list_ingredients.php';
        } else {
            http_response_code(403);
            require '403.html';
        }
        break;
        // เพิ่มกรณีอื่นๆ ตามต้องการ
    default:
        http_response_code(404);
        require '404.html';
        break;
}
