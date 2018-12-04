<?php
    header('content-type:text/html;charset=utf-8');
    // 接收数据
    $heroId = $_REQUEST['heroId'];
    // 连接数据库
    $link = mysqli_connect('127.0.0.1','root','root','test');
    // 准备sql
    $sql = "delete from manyHero where id =$heroId";
    // 执行sql
    mysqli_query($link,$sql);
    // 获取行数
    $rowNum = mysqli_affected_rows($link);
    // 关闭数据库连接
    mysqli_close($link);
    // 根据行数 提示用户
    if($rowNum!=-1){
        echo '<h2>哥们,你真狠,删掉了哦</h2>';
        // 直接返回首页
        // 晚上自己比划的时候 不要急着 写这行代码
        header('location:./index.php');
    }else{
        echo '<h2>嘤嘤嘤,由于某些问题,没有删除成功哦</h2>';
    }

    // 休息一会 睡一觉
    // 单位是秒
    // sleep(2);




?>