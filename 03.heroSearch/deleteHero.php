<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        // 接收数据
        $heroName = $_REQUEST['heroName'];
        // 连接数据库
        $link = mysqli_connect('127.0.0.1','root','root','test');
        // 准备sql语句
        $sql = "delete from manyHero where name ='$heroName'";
        // 执行sql语句
        mysqli_query($link,$sql);
        // 获取行数
        $rowNum = mysqli_affected_rows($link);
        // 关闭数据库连接
        mysqli_close($link);
        // 根据行数 提示用户
        if($rowNum!=-1){
            echo "好像你干掉了 $rowNum 个数据哦";
        }else{
            echo '哈哈哈 ,很遗憾';
        }

    ?>
</body>
</html>
