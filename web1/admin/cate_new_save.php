<?php
include('./DB.php');
include './public.php';

$catename= $_POST['catename'];
$module = $_POST['module'];
$orderno = $_POST['orderno'];



$sql = "insert into category(catename,orderno,module) values('$catename',$orderno,'$module')";

echo $sql;

$db = new DB();
$r = $db->exec($sql);

echo $r;

if($r){
    alert('发表成功!','cate_list.php');
}else{
    alert('发表失败','cate_list.php');
}





?>