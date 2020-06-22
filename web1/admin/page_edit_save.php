<?php
include('./DB.php');
include './public.php';

$boardname= $_POST['boardname'];
$content = $_POST['content'];
$id = $_POST['id'];

if(strlen($boardname)<1){
    alert('请输入单页模块名','page_edit.php='.$id); exit;
}

$sql = "update board set boardname='$boardname',content='$content' where id=$id";
$db = new DB();
$r = $db->exec($sql);

if($r){
    alert('修改成功!','page_list.php');
}else{
    alert('修改失败','page_new.php');
}





?>