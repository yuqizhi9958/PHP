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
        // var_dump($_REQUEST);
        $heroName = $_REQUEST['heroName'];
        $heroIcon = $_REQUEST['heroIcon'];
        /*
            array(2) { 
                ["heroName"]=> string(12) "亚索儿子" 
                ["heroIcon"]=> string(255) "https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1526899416653&di=7abcff90cb29e751bc8addba51ecb032&imgtype=0&src=http%3A%2F%2F08.imgmini.eastday.com%2Fmobile%2F20180422%2F20180422_5f33b20c9ae199b64aa7f7106239ca29_cover_mwpm_03201609.jpg" }
        */
        // 连接数据库
        $link = mysqli_connect('127.0.0.1','root','root','test');
        // 准备sql语句
        // 如何拼串 不容易出错 "inert into manyHero (icon,name) values('".$heroIcon."','".$heroName."')"
        // $sql = "insert into manyHero (icon,name) value('".$heroIcon."','".$heroName."')";
        // 双引号字符串中的变量 会被解析 这样就不需要拼接字符串了
        $sql = "insert into manyHero (icon,name) value('$heroIcon','$heroName')";
        // echo $sql;
        // 执行sql语句(增)
        mysqli_query($link,$sql);
        // 获取行数
        $hangshu = mysqli_affected_rows($link);
        // 关闭数据库
        mysqli_close($link);
        // 根据行数判断成果与否
        if($hangshu!=-1){
            echo '<h2>恭喜你,增加成功了哦!!!</h2>';
        }else{
            // 提示用户
            echo '<h2>哎呀,很遗憾,没有加成功呢!!</h2>';
        }
    ?>
    <a href="./index.html">戳我去首页哦</a>
</body>
</html>
