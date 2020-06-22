<?php
include('DB.php');
include('public.php');

$id=$_GET['id'];

if(!is_numeric($id)){
    alert('ID值不是一个数字','product_list.php'); exit;
}
$db = new DB();

$sql = "select * from product where id=$id";
$ret=$db->get_results($sql);
if($ret){
    $img = $ret['img'];
}else{
    echo '需要删除的数据不存在';
}
$sql = "delete from product where id=$id";
$r = $db->exec($sql);

if($r){
    if(strlen($img)>0){
        unlink('../files/'.$img);
    }
    alert('删除成功','product_list.php');
}else{
    alert('删除失败','product_list.php');
}

?>