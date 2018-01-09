<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/1/2
 * Time: 15:58
 */
header('content-type:text/hrml;charset=utf-8');
$mysqli=new mysqli('localhost','root','root','coldhair');
if ($mysqli->connect_error){
    die('Connect Error:'.$mysqli->connect_error);
}
$mysqli->set_charset('utr8');

//执行单条SQL语句
//插入记录操作
$sql="INSERT INTO tb4(name,sex1) VALUES ('Mahao','a'),
  ('Liming','b'),('Xhanfei','a');";
$res=$mysqli->query($sql);
if ($res){
   echo '插入成功了'.$mysqli->insert_id;
   echo '有'.$mysqli->affected_rows.'条记录被影响';
}else{
    echo 'Error:'.$mysqli->errno.':'.$mysqli->error;

}

//更新记录操作
$sql="UPDATE tb4 SET sex='b' WHERE id<=5";
$res=$mysqli->query($sql);
if ($res){
    echo '共有'.$mysqli->affected_rows.'条记录被更新了';
}else{
    echo 'Error'.$mysqli->errno.':'.$mysqli->error;
}

//删除记录操作
$sql="DELETE FROM tb4 WHERE id<=3";
$res=$mysqli->query($sql);
if ($res){
    echo $mysqli->affected_rows.'记录被删除';
}else{
    echo 'Error'.$mysqli->errno.':'.$mysqli->error;
}

//关闭MySQL的连接
$mysqli->close();