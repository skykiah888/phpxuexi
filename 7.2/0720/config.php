<?php
// 连接参数
return [
    // 类型
    'type' => $type ?? 'mysql',
    // 默认数据库主机名(IP)
    'host' => $host ?? 'localhost',
    // 默认数据库名
    'dbname' => $type ?? 'phpedu',
    // 默认字符编码集
    'charset' => $type ?? 'utf8',
    // 默认端口号
    'port' => $type ?? '3306',
    // 默认用户名
    'username' => $username ?? 'root',
    // 默认用户的密码
    'password' => $password ?? 'root'
];