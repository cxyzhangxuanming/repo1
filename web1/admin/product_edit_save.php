<?php
include('./DB.php');
include './public.php';

$id = $_POST['id'];
$productname= $_POST['productname'];
$pro_no = $_POST['pro_no'];
$cate_id = $_POST['cate_id'];
$content = $_POST['content'];
$img = $_FILES['img'];

if($img['name']){
    $ext=strrchr($img['name'],'.');
    $filename=time().rand(100,999).$ext;
    move_uploaded_file($img['tmp_name'],'../files/'.$filename);
    $oldimg=$_POST['oldimg'];
    if(strlen($oldimg)>1){
        unlink('../files/'.$oldimg);
    }
}else{
    $filename=$_POST['oldimg'];
}


$sql = "update product set productname='$productname',pro_no='$pro_no',cate_id='$cate_id',content='$content',img='$filename' where id=$id";
$db = new DB();
$r = $db->exec($sql);

if($r){
    alert('修改成功!','product_list.php');
}else{
    alert('修改失败','product_list.php');
}





?>