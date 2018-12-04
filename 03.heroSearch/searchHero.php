<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        ul{
            list-style: none;
        }
        li{
            float: left;
            width: 200px;
            height: 200px;
            text-align: center;
            border: 1px solid black;
            border-radius: 10px;
            margin: 10px;
        }
        li:hover{
            background-color: yellowgreen;
        }
        img{
            display: block;
            width: 160px;
            height: 160px;
            margin: 10px auto; 
        }
    </style>
</head>
<body>
    <ul>
        <?php
            // 接收数据
            // 获取浏览器提交过来的数据 get 跟post 都有
             $hero =  $_REQUEST['hero']; 
            //    echo $hero;
            // php操纵数据库(查询)

            // 连接使用的数据库 选择库
            $link = mysqli_connect('127.0.0.1','root','root','test');

            // 准备sql语句
            $sql = "select * from manyHero where name like '%".$hero."%'";
            // echo $sql;

            // 执行sql语句 查询
            $resulit = mysqli_query($link,$sql);

            // 解析结果
            $data = mysqli_fetch_all($resulit);
        // var_dump($data);
            // 关闭数据库
            mysqli_close($link);
            for($i =0;$i<count($data);$i++):
        ?>
            <li>
                <img src="<?php echo $data[$i][1];?>" alt="">
                <a href="#"><?php echo $data[$i][2];?></a>
            </li>
        <?php endfor; ?>
    </ul>
</body>
</html>