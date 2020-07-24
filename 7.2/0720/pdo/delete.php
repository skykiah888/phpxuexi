<?php
// pdo删除操作
// 1. 连接
require 'connect.php';

// 2. 操作
$sql = 'DELETE FROM  `users` WHERE `id` = ?;';
$stmt = $pdo->prepare($sql);
// 将值直接绑定到匿名占位符?上面
$stmt->execute([42]);
if ($stmt->rowCount() > 0)  echo '删除成功 ' . $stmt->rowCount() . ' 条记录';


// 3. 关闭
$pdo = null;