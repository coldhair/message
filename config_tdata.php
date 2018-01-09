<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/12/28
 * Time: 14:20
 */
$host='localhost';
$db_username='root';
$password='root';
$dbname='tdata';
$mysqli= @new mysqli($host,$db_username,$password);
if ($mysqli->connect_errno){
    die('数据库连接错误：'.$mysqli->connect_error);
}
$mysqli->select_db($dbname);
