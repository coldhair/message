<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/1/2
 * Time: 13:39
 */

//获取当前PHP文件的路径
$dir=dirname(__FILE__);
$dir='D:\phpStudy\PHPTutorial\WWW\message';//或者直接赋值

//获取某目录下所有文件、目录名（不包括子目录下文件、目录名）
$handler = opendir($dir);
while (($filename = readdir($handler)) !== false) {//务必使用!==，防止目录下出现类似文件名“0”等情况
    if ($filename != "." && $filename != "..") {
        $files[] = $filename;
    }
}
closedir($handler);//关闭

//打印所有文件名
foreach ($files as $value) {
    echo $value."<br />";
}
//rename()文件的重命名

