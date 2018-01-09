<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/12/28
 * Time: 16:51
 */

require_once('config.php');
//print_r($_POST);
$id=$_POST["id"];
$username=$_POST["username"];
$email=$_POST["email"];
$qq=$_POST["qq"];
//$date=$_POST["date"];
$content=$_POST["content"];

//$time= time();
//echo $time;
$queery="UPDATE message SET username='$username',email='$email',qq=$qq,content='$content' WHERE id=$id";
//$queery="SELECT * FROM message";
$db_data=$mysqli->query($queery);
echo "<a href='table.html'>继续留言</a>-|-<a href='list.php'>查看留言</a>";
