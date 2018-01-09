
<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/12/28
 * Time: 15:54
 */
require_once('config.php');
//print_r($_POST);
//$id=$_POST["id"];
$username=$_POST["username"];
$email=$_POST["email"];
$qq=$_POST["qq"];
//$date=$_POST["date"];
$content=$_POST["content"];

$time= time();
//SQL语句中，变量的值为字符时，要加上引号，如'$username';
$queery="INSERT INTO message(username,email,qq,date,content) VALUES('$username','$email',$qq,$time,'$content')";
$db_data=$mysqli->query($queery);
echo "<a href='index.php'>继续留言</a>-|-<a href='list.php'>查看留言</a>";
