<?php
include('./DB.php');
include './public.php';

$id = $_POST['id'];
$catename= $_POST['catename'];
$module = $_POST['module'];
$orderno = $_POST['orderno'];

$sql = "update category set catename='$catename',module='$module',orderno='$orderno' where id=$id";
$db = new DB();
$r = $db->exec($sql);

if($r){
    alert('修改成功!','cate_list.php');
}else{
    alert('修改失败','cate_list.php');
}





?>