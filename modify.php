<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/12/28
 * Time: 16:33
 */
require_once ('config.php');
//$id= isset($_GET[id])? $_GET[id] : '';
@ $id=$_GET[id];//这一句为啥总报错呢？
$ms_query="SELECT * FROM message WHERE id=$id";
$db_data=$mysqli->query($ms_query);
$row= $db_data->fetch_assoc();
        $username=$row["username"];
        $email=$row["email"];
        $qq=$row["qq"];
        $date=$row["date"];
        $content=$row["content"];
        $stime= date('Y-m-d H:i:s',$date);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table</title>
</head>
<body>
<h4 align="center">留言本修改页</h4>
<form method="post" action="do_verify.php">
<table border="1" cellspacing="0" cellpadding="0" align="center" width="80%">
    <tr>
        <td><input type="hidden" name="id" value="<?php echo $id; ?>">
            昵称：<input type="text" name="username" value="<?php echo $username; ?>"></td>
        <td>邮箱：<input type="email" name="email" value="<?php echo $email; ?>"></td>
        <td>QQ号：<input type="text" name="qq" value="<?php echo $qq; ?>"></td>
    </tr>
    <tr>
        <td colspan="3" align="center">留言内容</td>
    </tr>
    <tr>
        <td colspan="3" align="left"><textarea name="content" id="" cols="100%" rows="5"><?php echo $content ?></textarea></td>
    </tr>
    <tr>
        <td colspan="3" align="center">留言时间：<?php echo $stime; ?><input type="submit" value="修改留言"><a href="modify.php?id=<?php echo $id+1; ?>">下一页</a> </td>
    </tr>
</table>
</form>
</body>
</html>