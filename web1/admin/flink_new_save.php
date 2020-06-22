<?php
include('DB.php');
include('public.php');

$title=$_POST['title'];
$link_url=$_POST['link_url'];
$content=$_POST['content'];

$db=new DB();

$sql="insert into flink(title,link_url,content) values('$title','$link_url','$content')";
$r=$db->exec($sql);

if($r){
    alert('新增成功','flink_list.php');
}else{
    alert('新增失败','flink_list.php');
}

?>