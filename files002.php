<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/1/2
 * Time: 13:39
 */
//将标准文件标准名写入到数据库中，并把标准文件重命名为ID号
require_once('config_tdata.php');

//获取当前PHP文件的路径
$dir=dirname(__FILE__);
$dir='D:\phpStudy\PHPTutorial\WWW\AO';//或者直接赋值，注意目录在其他盘报错了“502 Bad Gateway”，且文件名不能包含中文。

//获取某目录下所有文件、目录名（不包括子目录下文件、目录名）
$handler = opendir($dir);
while (($filename = readdir($handler)) !== false) {//务必使用!==，防止目录下出现类似文件名“0”等情况
    if ($filename != "." && $filename != "..") {
        $files[] = $filename;
    }
}
closedir($handler);//关闭

//其实有更简单方便直接的
$pattern='/\.\w{3,4}$/';//匹配文件扩展名的正则表达式
//打印所有文件名
foreach ($files as $value) {
    //echo $value."<br />";//这个输出的就是乱码
    $str = preg_replace($pattern,'',$value);
    $str = iconv('GB2312','UTF-8',$str);//将中文字符转化为UTF-8字符，不然全是乱码
        //echo $str;


    $sql="INSERT INTO temp(gb_name) VALUES ('$str')";
    $res=$mysqli->query($sql);

    if ($res){
        echo $str.'插入成功了！'.$mysqli->insert_id;
        echo '有'.$mysqli->affected_rows.'条记录被影响.</br>';
    }else{
        echo 'Error:'.$mysqli->errno.':'.$mysqli->error;
    }
}
//rename()文件的重命名

?>