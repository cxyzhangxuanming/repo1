<?php
include('DB.php');
include('public.php');

$id=$_GET['id'];

if(!is_numeric($id)){
    alert('ID值不是一个数字','admin_list.php'); exit;
}
$db = new DB();

$sql = "delete from admin where id=$id";
$r = $db->exec($sql);

if($r){
    alert('删除成功','admin_list.php');
}else{
    alert('删除失败','admin_list.php');
}

?>