<?php
// mysqli更新操作
// 1. 连接
require 'connect.php';

// 2. 操作
$sql = 'UPDATE  `users` SET `name`=?, `email`= ?, `password`=? WHERE `id` = ?;';
// sql语句对象
$stmt = $mysqli->prepare($sql);
// 占位符与变量名绑定
$stmt->bind_param('sssi', $name, $email, $password, $id);
// 变量赋值
$user = ['name'=>'皇后','email'=>'hh@php.cn', 'password'=>sha1('888'), 'id'=>14 ];
//展开为独立变量给sql语句模板中的与占位符对应的变量名赋值
extract($user);
//执行更新
$stmt->execute();
printf('更新了 %s 条记录', $stmt->affected_rows);

// 3. 关闭
$mysqli->close();