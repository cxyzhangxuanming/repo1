<?php
include('./DB.php');
include './public.php';

$productname= $_POST['productname'];
$pro_no = $_POST['pro_no'];
$cate_id = $_POST['cate_id'];
$content = $_POST['content'];
$img = $_FILES['img'];

if($img['name']){
    $ext=strrchr($img['name'],'.');
    $filename=time().rand(100,999).$ext;
    move_uploaded_file($img['tmp_name'],'../files/'.$filename);
}else{
    $filename='';
}


$sql = "insert into product(productname,pro_no,cate_id,content,img) values('$productname','$pro_no',$cate_id,'$content','$filename')";
$db = new DB();
$r = $db->exec($sql);


if($r){
    alert('新增成功!','product_list.php');
}else{
    alert('失败','product_list.php');
}





?>