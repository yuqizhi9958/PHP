<pre>
<?php
    header('content-type:text/html;charset=utf-8');

    // 连接数据库 输入用户名密码 选择使用库
    // 参数1 地址
    // 参数2 用户名
    // 参数3 密码
    // 参数4 库的名字
    $link = mysqli_connect('127.0.0.1','root','root','test');

    // 准备需要执行的 sql语句
    $sql = "select * from manyHero";

    // 让数据库去执行库去执行
    $result = mysqli_query($link,$sql);
    // var_dump($result);
    
    // 查询语句执行完毕之后 会有很多的结果 自己解析一些
    $data = mysqli_fetch_all($result);
    // var_dump($data);

    // 关闭数据库连接
    mysqli_close($link);

    for($i=0;$i<count($data);$i++):
?>
    <p>
        <img src="<?php echo $data[$i][1]; ?>" alt="">
        <a href="#"><?php echo $data[$i][2]; ?></a>
    </p>
<?php endfor; ?>
</pre>