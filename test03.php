<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/1/2
 * Time: 13:29
 */

$filename = 'test02.php';
//编写代码读取$filename的文件内容
$fp=fopen($filename,'r+');
while ($fp){
    echo fgets($fp).'<br/>';//逐行读取文件内容
}
fclose($fp);