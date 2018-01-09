<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/1/4
 * Time: 18:08
 */

//将标准文件标准名写入到数据库中，并把标准文件重命名为ID号
require_once('config_tdata.php');

//获取当前PHP文件的路径
$dir=dirname(__FILE__);
$dir='D:\phpStudy\PHPTutorial\WWW\AO';//或者直接赋值，注意：目录在其他盘报错了“502 Bad Gateway”，且文件名不能包含中文。

$pattern='/\.\w{3,4}$/';//匹配文件扩展名的正则表达式

//获取某目录下所有文件、目录名（不包括子目录下文件、目录名）
$handler = opendir($dir);
while (($filename = readdir($handler)) !== false) {//务必使用!==，防止目录下出现类似文件名“0”等情况
    if ($filename != "." && $filename != "..") {
        $gname=preg_replace($pattern,'',$filename);
        $gname=iconv('GB2312','UTF-8',$gname);

//        去数据库里查询与文件名的那个记录
$sql="SELECT id,gb_name FROM temp WHERE gb_name='$gname'";
$mysqli_results=$mysqli->query($sql);
$rows=$mysqli_results->fetch_all(1);
//var_dump($rows);
        //这里要判断一下是否为空，待完善哟。
$id=$rows[0]['id'];
echo $id;

$path_parts = pathinfo($filename,PATHINFO_EXTENSION);//获得文件的扩展名

        //终于完成了文件的批量重命名，原来要加上路径啊。
rename($dir.'\\'.$filename,$dir.'\\'.$id.'.'.$path_parts);//两个斜线，其中一个是为了转义。
        echo $path_parts.'重命名完成了<br/>';
    }
}
closedir($handler);//关闭

