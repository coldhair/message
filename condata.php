<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/1/8
 * Time: 17:46
 */


$host='localhost';
$db_username='root';
$password='root';
$dbname='tijian';
$mysqli= @new mysqli($host,$db_username,$password);
if ($mysqli->connect_errno){
    die('数据库连接错误：'.$mysqli->connect_error);
}
$mysqli->select_db($dbname);
var_dump($mysqli);
$sql="SELECT * FROM info";
$mysqli_results=$mysqli->query($sql);
$rows=$mysqli_results->fetch_all(1);
echo '<hr/>';
echo '<pre>';
var_dump($rows);
echo '</pre>';