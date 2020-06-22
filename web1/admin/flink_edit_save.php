<?php
include('./DB.php');
include './public.php';

$id = $_POST['id'];
$title= $_POST['title'];
$link_url = $_POST['link_url'];
$content = $_POST['content'];
$sql = "update flink set title='$title',link_url='$link_url',content='$content' where id=$id";
$db = new DB();
$r = $db->exec($sql);

if($r){
    alert('修改成功!','flink_list.php');
}else{
    alert('修改失败','flink_list.php');
}





?>