<?php
// mysqli查询3: bind_result() + fetch() + while()
// 将结果集中的每条记录的每个字段，与一个变量进行绑定

// 1. 连接
require 'connect.php';

// 2. 操作
$sql = 'SELECT `id`, `name`,`email` FROM `users` WHERE `id` > ?';
// sql语句对象
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('i', $id);

$id = 15;
$stmt->execute() or die($stmt->error);
// 字段与变量的绑定
$stmt->bind_result($id, $name, $email);

// 因为当前操作不涉及结果集对象，如果要获取结果集中的数量，用以下二行代码
$stmt->store_result();
if ($stmt->num_rows === 0) exit('没有内容');

// 循环遍历
while ($stmt->fetch()) {
    printf('%d: %s ----| %s <br>', $id, $name, $email);
}


// 3. 关闭连接
$mysqli->close();