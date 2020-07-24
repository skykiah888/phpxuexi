<?php
// 连接数据库

// 导入配置参数，就是一个数组
$config = require __DIR__ . '/../config.php';

// 关联数组 ===> 独立变量
extract($config);

// 创建连接对象: 连接数据库
$mysqli = new mysqli($host, $username, $password, $dbname);

// 检测错误
if ($mysqli->connect_errno) die('Connect Error: ' . $mysqli->connect_error);

// 字符编码
$mysqli->set_charset($charset);