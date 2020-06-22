<?php
include('./DB.php');
include './public.php';

$boardname= $_POST['boardname'];
$content = $_POST['content'];

if(strlen($boardname)<1){
    alert('请输入单页模块名','page_new.php'); exit;
}

$sql = "insert into board(boardname,content) values('$boardname','$content')";
$db = new DB();
$r = $db->exec($sql);

if($r){
    alert('新增成功!','page_list.php');
}else{
    alert('新增失败','page_new.php');
}





?>