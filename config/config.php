<?php
// กำหนด path ของ include
set_include_path(get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] . '/include');

// กำหนด autoload function สำหรับ include ไฟล์ที่เรียกใช้
spl_autoload_register(function ($class) {
    include $class . '.php';
});
?>
