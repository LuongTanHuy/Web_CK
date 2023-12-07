<?php
define('_DIR_ROOT', __DIR__); // định nghĩa biến lưu đường dẫn gốc là _DIR_ROOT
// xử lí http root
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
  $web_root = 'https://' . $_SERVER['HTTP_HOST'];
} else {
  $web_root = 'http://' . $_SERVER['HTTP_HOST'];
}
$documentRoot = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);
$dirRoot = str_replace('\\', '/', ROOT_PATH);

$folder = str_replace(strtolower($documentRoot), '', strtolower($dirRoot));
$web_root = $web_root . $folder;
define('_WEB_ROOT', $web_root . 'public');
