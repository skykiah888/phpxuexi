<?php
// pdo更新操作
// 1. 连接
require 'connect.php';

// 2. 操作
$sql = 'UPDATE  `users` SET `name`=?, `email`= ?, `password`=? WHERE `id` = ?;';
$stmt = $pdo->prepare($sql);
// 将值直接绑定到匿名占位符?上面
$stmt->execute(['小龙人','xlr@php.cn', sha1('1234567'), 42]);
if ($stmt->rowCount() > 0)  echo '更新成功 ' . $stmt->rowCount() . ' 条记录';


// 3. 关闭
$pdo = null;