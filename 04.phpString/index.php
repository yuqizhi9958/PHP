<?php
    // 设置中文编码
    header('content-type:text/html;charset=utf-8');

    // 定义字符串
    $name = 'jack';
    $arr = array('skill'=>'捏哈哈');
    // 定义字符串2
    // 单引号字符串 写的是什么 就是什么
    $str1 = '我的名字叫做 $name';

    // 双引号字符串 内部的变量可以被解析
    // 只能解析基本的语法,无法解析复杂的语法
    // $str2 = "我的名字叫做 $name 我擅长 $arr['skill']";
    echo $str1;
    echo '<br>';
    echo $str2;

?>