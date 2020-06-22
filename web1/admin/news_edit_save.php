<?php
include('./DB.php');
include './public.php';

$id = $_POST['id'];
$title= $_POST['title'];
$cate_id = $_POST['cate_id'];
$author = $_POST['author'];
$content = $_POST['content'];
$img = $_FILES['img'];

if($img['name']){
    $ext=strrchr($img['name'],'.');
    $filename=time().rand(100,999).$ext;
    move_uploaded_file($img['tmp_name'],'../files/'.$filename);
    $oldimg=$_POST['old_img'];
    if(strlen($oldimg)>1){
        unlink('../files/'.$oldimg);
    }
}else{
    $filename=$_POST['old_img'];
}

$sql = "update news set title='$title',cate_id='$cate_id',author='$author',content='$content',img='$filename' where id=$id";
$db = new DB();
$r = $db->exec($sql);

if($r){
    alert('修改成功!','news_list.php');
}else{
    alert('修改失败','news_list.php');
}





?>