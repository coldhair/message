<?php
//PHP 单选按钮表单中 name 属性的值是一致的，value 值是不同的
$q = isset($_GET['q'])? htmlspecialchars($_GET['q']):'';
if ($q){
    //这些用switch语句写更简洁也更简单。
    if ($q=='RUNOOB'){
        echo '菜鸟';
    }else if ($q =='Google'){
        echo '谷歌';
    }else if ($q =='Taobao'){
        echo '淘宝';
    }else if ($q=='Baidu'){
        echo '百度';
    }
}else{
?>
<form action="" method="get">
    <input type="radio" name="q" value="RUNOOB" id="run"><label for="run">RUNOOB</label>
    <input type="radio" name="q" value="Google" id="goo"><label for="goo">Google</label>
    <input type="radio" name="q" value="Taobao" id="tao"><label for="tao">Taobao</label>
    <input type="radio" name="q" value="Baidu" id="bai"><label for="bai">Baidu</label>
    <input type="submit" value="提交">
</form>
    <?php
}
?>