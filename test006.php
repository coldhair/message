<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/1/4
 * Time: 9:08
 */
//创建可抛出一个异常的函数
function checkNum($number){
    if($number>1){
        throw new Exception("异常提示-数字必须小于等于1");
    }
    return true;
}

//在 "try" 代码块中触发异常
try{
    checkNum(2);
    //如果异常被抛出，那么下面一行代码将不会被输出
    echo '如果能看到这个提示，说明你的数字小于等于1';
}catch(Exception $e){
    //捕获异常
    echo '捕获异常: ' .$e->getMessage();
}