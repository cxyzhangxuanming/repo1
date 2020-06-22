<?php
include('DB.php');
include('public.php');

$id=$_GET['id'];

if(!is_numeric($id)){
    alert('ID值不是一个数字','guestbook_list.php'); exit;
}
$db = new DB();

$sql = "delete from guestbook where id=$id";
$r = $db->exec($sql);

if($r){
    alert('删除成功','guestbook_list.php');
}else{
    alert('删除失败','guestbook_list.php');
}

?>