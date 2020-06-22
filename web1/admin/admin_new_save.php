<?php
include('DB.php');
include('public.php');

$username=$_POST['username'];
$password=$_POST['password'];
$flag=$_POST['flag'];

$db=new DB();

$sql="insert into admin(username,password,flag) values('$username','$password','$flag')";
$r=$db->exec($sql);

if($r){
    alert('新增成功','admin_list.php');
}else{
    alert('新增失败','admin_list.php');
}

?>