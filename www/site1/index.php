<?php
// test to connect redis
// $redis = new \Redis();
// try {
//     $redis->connect('redis', 6379);
// } catch (\Exception $e) {
//     var_dump($e->getMessage())  ;
//     die;
// }

// succes to echo 1
// echo $redis->set('hello', 'hello docker!');

// success to use mysql without PDOException
// try {
//     $connection = new PDO('mysql:host=mysql;dbname=mysql', 'root', '123456');
// } catch (PDOException $e) {
//     var_dump($e->getMessage());
//     die;
// }

phpinfo();
