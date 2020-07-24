<?php
// mysqli删除操作
// 1. 连接
require 'connect.php';

// 2. 操作
$sql = 'DELETE FROM  `users`  WHERE `id` = ?;';
// sql语句对象
$stmt = $mysqli->prepare($sql);
// 占位符与变量名绑定
$stmt->bind_param('i',$id);
// 变量赋值
$id=14;

//执行更新
$stmt->execute();
printf('删除了 %s 条记录', $stmt->affected_rows);

// 3. 关闭
$mysqli->close();