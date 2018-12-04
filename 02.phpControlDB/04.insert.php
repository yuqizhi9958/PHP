<?php
    // 连接数据库
    $link = mysqli_connect('127.0.0.1','root','root','test');
    // 准备sql
    $sql = "insert into manyHero (icon,name) values('https://ss0.baidu.com/73F1bjeh1BF3odCf/it/u=524569557,3457711277&fm=85&s=DB94F7AE090342C22877877D0300707F','很好吃的食物')";

    // 执行sql
    mysqli_query($link,$sql);

    // 增删改 无法获取具体的结果 数据库只会告诉我们 有几个数据收到了影响
    // 获取影响的行数
    $rowNum = mysqli_affected_rows($link);
    echo $rowNum;
    // 关闭数据库连接
    mysqli_close($link);

?>