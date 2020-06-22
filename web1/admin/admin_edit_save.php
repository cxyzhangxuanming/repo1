<?php
include('./DB.php');
include './public.php';

$id = $_POST['id'];
$username= $_POST['username'];
$password = $_POST['password'];
$flag = $_POST['flag'];
$sql = "update admin set username='$username',password='$password',flag='$flag' where id=$id";
$db = new DB();
$r = $db->exec($sql);

if($r){
    alert('修改成功!','admin_list.php');
}else{
    alert('修改失败','admin_list.php');
}





?>