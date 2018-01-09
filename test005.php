<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/1/2
 * Time: 16:41
 */
header('content-type:text/hrml;charset=utf-8');
$mysqli=new mysqli('localhost','root','root','coldhair');
if ($mysqli->connect_error){
    die('Connect Error:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf8');

//查询记录
$sql="SELECT * FROM tb4";
$mysqli_result=$mysqli->query($sql);
//var_dump($mysqli_result);
if($mysqli_result && $mysqli_result->num_rows>0){
    echo '共查到'.$mysqli_result->num_rows.'条记录';
    $rows=$mysqli_result->fetch_all(1);
    var_dump($rows);
}else{
    echo '查询错误或无记录';
}