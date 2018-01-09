<?php
//PHP 下拉菜单多选，PHP表单（很基础，很有用）：http://www.runoob.com/php/php-forms.html
$q= isset($_POST['q']) ? $_POST['q'] : '';
$i=$q[0];
if (is_array($q) && $i != NULL){
    $hobby=array(
            'run'=>'我爱好跑步',
            'jump'=>'我爱好跳高',
            'play'=>'我爱好打球',
            'sing'=>'我爱好唱歌'
    );
        foreach ($q as $val) {
        echo $hobby[$val].'<br/>';
        }
}else{
?>
<!--  当选择第一个“选择一种爱好”这个选项时，得到的是一NULL，这时数组$q中是有值的，所以我要判断一下，数组$q中的第一个元素非空。-->
<form action="" method="post">
    <select multiple="multiple" name="q[]" id="">
        <option value="">选择一种爱好</option>
        <option value="run">跑步</option>
        <option value="jump">跳高</option>
        <option value="play">打球</option>
        <option value="sing">唱歌</option></select>
    <input type="submit" value="提交" id="">
</form>
<?php
}
?>

