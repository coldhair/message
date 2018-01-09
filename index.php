<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table</title>
</head>
<body>
<h4 align="center">留言本首页</h4>
<form method="post" action="add.php">    
<table border="1" cellspacing="0" cellpadding="0" align="center" width="80%">
    <tr>
        <td>昵称：<input type="text" name="username"></td>
        <td>邮箱：<input type="email" name="email"></td>
        <td>QQ号：<input type="text" name="qq"></td>
    </tr>
    <tr>
        <td colspan="3" align="center">留言内容</td>
    </tr>
    <tr>
        <td colspan="3" align="left"><textarea name="content" id="" cols="100%" rows="5"></textarea></td>
    </tr>
    <tr>
        <td colspan="3" align="center"><input type="submit" value="提交留言">
            <input type="reset" value="重置留言">
        </td>
    </tr>

</table>
    
</form>
</body>
</html>