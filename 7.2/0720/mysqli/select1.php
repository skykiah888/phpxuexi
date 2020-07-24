<?php
// mysqli查询1: fetch_assoc() + while()

// 1. 连接
require 'connect.php';

// 2. 操作
$sql = 'SELECT * FROM `users` WHERE `id` > ?';
// sql语句对象
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('i', $id);

$id = 15;
$stmt->execute() or die($stmt->error);

// 获取结果集
$result = $stmt->get_result();

if ($result->num_rows === 0) exit('结果为空');
// fetch_assoc():以关联数组方式返回一个记录
// 循环遍历
while ($user=$result->fetch_assoc()) {
    vprintf('%d: %s | %s <br>', $user);
}

// 3. 释放结果
$result->free();
// 4. 关闭连接
$mysqli->close();