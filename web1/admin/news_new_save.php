<?php
include('./DB.php');
include './public.php';

$title= $_POST['title'];
$cate_id = $_POST['cate_id'];
$author = $_POST['author'];
$content = $_POST['content'];
$img = $_FILES['img'];

if($img['name']){
    $ext=strrchr($img['name'],'.');
    $filename=time().rand(100,999).$ext;
    move_uploaded_file($img['tmp_name'],'../files/'.$filename);
}else{
    $filename='';
}


$sql = "insert into news(title,cate_id,author,content,img) values('$title','$cate_id','$author','$content','$filename')";
$db = new DB();
$r = $db->exec($sql);

if($r){
    alert('发表成功!','news_list.php');
}else{
    alert('发表失败','news_new.php');
}





?>