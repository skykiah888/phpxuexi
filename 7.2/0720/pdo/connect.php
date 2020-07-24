<?php
// pdo连接数据库

// 导入配置参数，就是一个数组
$config = require __DIR__ . '/../config.php';

// 关联数组 ===> 独立变量
extract($config);

// 创建连接对象: 连接数据库
// $dsn: 数据源名称
// $dsn = 'mysql:host=localhost;dbname=phpedu;charset=utf8;port=3306';

try {
    $dsn= sprintf('%s:host=%s;dbname=%s;charset=%s;port=%s',$type,$host,$dbname,$charset,$port);
    $pdo = new PDO($dsn, $username, $password);
    // 设置结果集的默认获取模式: 只关心关联数组部分
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    exit('Connection Error: ' . $e->getMessage());
}




