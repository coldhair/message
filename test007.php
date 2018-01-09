<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/1/4
 * Time: 14:30
 */

require_once('config_tdata.php');//包含数据库连接文件
$sql='SELECT control FROM gb_tem';//查询语句，从数据库中查询标准的名称
$mysqli_result=$mysqli->query($sql);//查询结果
if ($mysqli && $mysqli_result->num_rows>0){
    echo '共查到'.$mysqli_result->num_rows.'条纪录';

    //将查询结果赋值给$rows,它是一个二维数组
    $rows=$mysqli_result->fetch_all(1);
    //var_dump($rows);供测试用
}else{
    echo '查无记录';
}

//定义替换标准号的正则表达式
$pattern='/[a-z|A-Z].+?-[0-9]{1,5}/';
$end=$mysqli_result->num_rows;


for ($i=0;$i<$end;$i++){
    $gb=$rows[$i]['control'];//将$rows中的标准名赋值给$gb

/*
--------------------------以下为测试内容----------------------------
*/
//echo '<hr/>';
//echo $gb;
//echo preg_replace($pattern,'',$gb);

//echo '<hr/>';
/*
    --------------------------测试内容结束----------------------------
*/


    //将匹配结果赋值到$matches，如果能匹配到，它是一个数组，否则为空
    preg_match($pattern,$gb,$matches);
    if (!empty($matches)){
        $gbnum=$matches[0]; //将匹配到的标准号赋值给$gbnum


        echo $matches[0].'<br/>';

        //把匹配到的结果插入到数据库
        $update="UPDATE gb_tem SET gbnum='$gbnum' WHERE tdata.gb_tem.control='$gb'";
        $res= $mysqli->query($update);


        //一定要有这些测试的语句，不然，错了会抓狂的。
        if ($res){
            echo '插入成功了！'.$mysqli->insert_id;
            echo '有'.$mysqli->affected_rows.'条记录被影响.</br>';
        }else{
            echo 'Error:'.$mysqli->errno.':'.$mysqli->error;
        }
//        输出反馈信息
        echo '《'. $gb .'》的标准号：' .$gbnum .'已经成功更新了。</br>';
    }
}

echo '<hr/>';

$pattern='/[a-z|A-Z].+-[0-9]+/';
$gb='GBZ 94-2014 职业性肿瘤的诊断';
$matches=array();
preg_match($pattern,$gb,$matches);

function show($var=NULL){
    if (empty($var)){
        echo 'NULL';
    }else if (is_array($var)||is_object($var)){
        //判断是否数组或对象
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }else{
        echo $var;
    }
}
show($matches);

$num=$matches[0];
echo $num;
