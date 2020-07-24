<?php
// pdo 新增操作

// 1. 连接
require 'connect.php';

// 2. 操作
$sql = 'INSERT `users` SET `name`=?, `email`= ?, `password`=?;';
// sql语句对象
$stmt = $pdo->prepare($sql);
// 1. ? 与 变量名绑定, 引用绑定
// $stmt->bindParam(1, $name, PDO::PARAM_STR, 30);
// $stmt->bindParam(2, $email, PDO::PARAM_STR, 100);
// $stmt->bindParam(3, $password, PDO::PARAM_STR, 40);


// 2. 变量名与值绑定(赋值)
// $name = '大飞111';
// $email = 'df111@php.cn';
// $password = sha1('df111');

// 执行
// $stmt->execute();


// $name = '大飞99999';
// $email = 'df1118888@php.cn';
// $password = sha1('df111');


// 执行
// $stmt->execute();

// rowCount():返回表中受影响的记录数量,当前是新增的记录数量
// if ($stmt->rowCount() > 0)  echo '新增成功 ' . $stmt->rowCount() . ' 条记录,主键id: ' . $pdo->lastInsertId();

// 值绑定,变量必须先赋值
// $name = '蛋蛋';
// $email = 'dd2@php.cn';
// $password = sha1('dd999');
// $stmt->bindValue(1, $name, PDO::PARAM_STR);
// $stmt->bindValue(2, $email, PDO::PARAM_STR);
// $stmt->bindValue(3, $password, PDO::PARAM_STR);


// 执行
// $stmt->execute() or die(print_r($stmt->errorInfo(),true));


// $name = '蛋蛋888';
// $email = 'dd2888@php.cn';
// $password = sha1('dd999');
// $stmt->bindValue(1, $name, PDO::PARAM_STR);
// $stmt->bindValue(2, $email, PDO::PARAM_STR);
// $stmt->bindValue(3, $password, PDO::PARAM_STR);


// 执行
// $stmt->execute() or die(print_r($stmt->errorInfo(),true));

// rowCount():返回表中受影响的记录数量,当前是新增的记录数量
// if ($stmt->rowCount() > 0)  echo '新增成功 ' . $stmt->rowCount() . ' 条记录,主键id: ' . $pdo->lastInsertId();

// bindParam(): 引用绑定，只需要绑定一次即可(直接绑定到模板上)
// bindValue(): 值绑定, 实时映射,变量的变化或在实时的映射到占位符上,因此每一次都必须重新赋值

// 值绑定实时性,直观好理解，但是操作非常麻烦,可以给execute()传参来简化它
$stmt->execute(['小花','xh@php.cn', sha1('567')]);
if ($stmt->rowCount() > 0)  echo '新增成功 ' . $stmt->rowCount() . ' 条记录,主键id: ' . $pdo->lastInsertId();
// 3. 关闭
// $pdo = null;
unset($pdo);