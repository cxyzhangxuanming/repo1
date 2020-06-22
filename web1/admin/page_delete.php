<?php
include('DB.php');
include('public.php');

$id=$_GET['id'];

if(!is_numeric($id)){
    alert('ID值不是一个数字','page_list.php'); exit;
}
$db = new DB();
$sql = "delete from board where id=$id";

$r = $db->exec($sql);
if($r){
    alert('删除成功','page_list.php');
}else{
    echo '删除失败!';
    
}

?>