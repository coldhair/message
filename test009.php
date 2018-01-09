<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/1/6
 * Time: 10:26
 */
$x=5;//全局作用域
function myTest(){
    $y=10;//局部作用域
    echo '测试函数内部变量<br/>';
    echo '变量x是：'.$x;
    echo '<br/>';
    echo '变量y是：'.$y;
}
myTest();

//上面只能输出y不能输出X

echo '<br/>测试函数外部变量<br/>';
echo '变量x是：'.$x;
echo '<br/>';
echo '变量y是：'.$y;
