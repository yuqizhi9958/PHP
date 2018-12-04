<?php
    // 连接数据库
    $link = mysqli_connect('127.0.0.1','root','root','test');
    // 准备sql
    // $sql = "delete from manyH234324ero where id =2";
    $sql = "delete from manyHero where id =2";

    // 执行sql
    mysqli_query($link,$sql);

    // 增删改 无法获取具体的结果 数据库只会告诉我们 有几个数据收到了影响
    // 获取影响的行数
    // 如果返回的是0 所有没有数据受影响
    // 返回的是 -1 说明 sql语句没有写对
    $rowNum = mysqli_affected_rows($link);
    echo $rowNum;

    // 关闭数据库连接
    mysqli_close($link);

?>