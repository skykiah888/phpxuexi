<?php
// pdo查询操作: fetch() + while()
// 1. 连接
require 'connect.php';

// 2. 操作
$sql = 'SELECT `id`,`name`,`email` FROM  `users` WHERE `id` >= ?;';
$stmt = $pdo->prepare($sql);
// 将值直接绑定到匿名占位符?上面
$stmt->execute([30]);

while ($user = $stmt->fetch()) {
    vprintf('<li>%s: %s | %s</li>', $user);
}

// 3. 关闭
$pdo = null;