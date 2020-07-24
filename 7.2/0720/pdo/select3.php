<?php
// pdo查询操作3: bindColumn() + fetch() + while()
// 1. 连接
require 'connect.php';

// 2. 操作
$sql = 'SELECT `id`,`name`,`email` FROM  `users` WHERE `id` >= ?;';
$stmt = $pdo->prepare($sql);
// 将值直接绑定到匿名占位符?上面
$stmt->execute([30]);

// 将三个字段与三个变量绑定
$stmt->bindColumn('id', $id);
$stmt->bindColumn('name', $name);
$stmt->bindColumn('email', $email);

while ($stmt->fetch(PDO::FETCH_BOUND)) {
    printf('<li>%s: %s | %s</li>',$id, $name, $email);
}

// 获取记录数量比较难
// echo $stmt->rowCount();

$sql = 'SELECT COUNT(`id`) AS `count` FROM  `users` WHERE `id` >= ?;';
$stmt = $pdo->prepare($sql);
// 将值直接绑定到匿名占位符?上面
$stmt->execute([30]);
$stmt->bindColumn('count', $count);
$stmt->fetch(PDO::FETCH_BOUND);
echo '满足条件的记录数量'. $count;
// 3. 关闭
$pdo = null;