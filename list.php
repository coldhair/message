<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table</title>
</head>
<body>
<h4 align="center">留言本列表</h4>
<table border="1" cellspacing="0" cellpadding="0" align="center" width="80%">

<?php
require_once('config.php');
    $time= time();
    //echo $time;
    //$queery="INSERT INTO message(username,email,qq,date,content) VALUES('吕艳朋','coldhair@163.com','315678525',$time,'这是第一篇文章，你感觉怎么样？')";
    $queery="SELECT * FROM message ORDER BY id DESC";
    $db_data=$mysqli->query($queery);
    //var_dump($db_data);
    while($row = $db_data->fetch_assoc()) {
        $id=$row["id"];
        $username=$row["username"];
        $email=$row["email"];
        $qq=$row["qq"];
        $date=$row["date"];
        $content=$row["content"];
        $html= <<<EOF
    <tr>
        <td>昵称：$username</td>
        <td>邮箱：$email</td>
        <td>QQ号：$qq</td>
    </tr>
    <tr>
        <td colspan="3" align="center">留言内容</td>
    </tr>
    <tr>
        <td colspan="3" align="left">$content</td>
    </tr>
    <tr>
    <td colspan="3" align="center"><a href="index.php">回到首页</a> |<a href="modify.php?id=$id">修改留言</a> </td>
    </tr>
    <tr>
    <td colspan="3" bgcolor="aqua" height="15"></td>
    </tr>

EOF;
        echo $html;
    }
?>

    <tr>
        <td>昵称：username</td>
        <td>邮箱：email</td>
        <td>QQ号：qq</td>
    </tr>
    <tr>
        <td colspan="3" align="center">留言内容</td>
    </tr>
    <tr>
        <td colspan="3" align="left">这是我今天的主要留言内容</td>
    </tr>
</table>
</body>
</html>

