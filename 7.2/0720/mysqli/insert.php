<?php
// mysqli新增操作

// 1. 连接
require 'connect.php';

// 2. 操作
// sql语句, ?:匿名占位符
$sql = 'INSERT `users` SET `name`=?, `email`= ?, `password`=?;';
// 第一步: 将sql语句转为sql语句对象: stmt对象,预处理对象, 预编译语句对象
$stmt = $mysqli->prepare($sql);
// 给sql语句中的占位符?,绑定变量分二步
// 1. 给占位符绑定一个变量名(变量标识符)
$stmt->bind_param('sss', $name,$email,$password);

// 2. 将变量名与一个具体的值进行绑定: 变量赋值
// $name = 'admin';
// $email = 'admin@php.cn';
// sha1():生成40位由16进制字母组成的随机字符串
// $password = sha1('123');

// 执行
// $stmt->execute() or die($stmt->error);
// printf('成功的新增了 %s 条记录, 新增主键ID = %d<br>', $stmt->affected_rows, $stmt->insert_id);

// $data = [
//     'name'=> 'peter',
//     'email'=> 'peter@php.cn',
//     'password' => sha1('123456'),
// ];
// 将关联数组解构到一组独立变量中
// extract($data);

// // 执行
// $stmt->execute() or die($stmt->error);
// printf('成功的新增了 %s 条记录, 新增主键ID = %d<br>', $stmt->affected_rows, $stmt->insert_id);

 
// 通过遍历一个二维数组,可以实现一次性插入多条记录
$users = [
    ['name'=> '小燕子','email'=>'xyz@php.cn', 'password'=>sha1('123456')],
    ['name'=> '紫薇','email'=>'zw@php.cn', 'password'=>sha1('123456')],
    ['name'=> '五阿哥','email'=>'wag@php.cn', 'password'=>sha1('123456')],
    ['name'=> '尔康','email'=>'ek@php.cn', 'password'=>sha1('123456')],
    ['name'=> '金锁','email'=>'js@php.cn', 'password'=>sha1('123456')],
];

foreach ($users as $user) {
    extract($user);

    if ($stmt->execute())
        printf('成功的新增了 %s 条记录, 新增主键ID = %d<br>', $stmt->affected_rows, $stmt->insert_id);
    else 
        exit(sprintf('新增失败 , $d: %s', $stmt->errno, $stmt->error ));
}
// 3.关闭
$mysqli->close();