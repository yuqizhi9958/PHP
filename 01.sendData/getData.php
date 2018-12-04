<?php
header('content-type:text/html;charset=utf-8');
// 接收提交过来的get的数据
// 超全局变量
// var_dump($_GET);

// $_POST
// var_dump($_POST);

// 无论get还是post的数据都可以接收得到
var_dump($_REQUEST);

// 数据保存起来
// 参数1 保存的位置
// 参数2 保存的数据
// 参数3 模式
file_put_contents('./data/info.txt',',',FILE_APPEND);
// 保存的数据
file_put_contents('./data/info.txt',$_REQUEST['userName'],FILE_APPEND);

/*
    使用文本文件保存数据 
        安全性不高
        数据容易丢失
    商业开发中
        数据一般保存在数据库中
        安全性,稳定性更高
    数据库
        保存数据的软件
        常见的数据库软件
            MySQL
                免费开源
            oracle
            MSSQL
            ...
        如何操纵数据库
            SQL语句 结构化查询语句
            增删改查
        Mysql - front 
            数据库图形化管理软件

*/
