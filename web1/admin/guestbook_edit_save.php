<?php
include('DB.php');
include('public.php');

$id=$_POST['id'];
$username=$_POST['username'];
$content=$_POST['content'];

$db= new DB();
$sql="update guestbook set username='$username',content='$content' where id=$id";
$r =$db->exec($sql);

if($r){
    alert('留言修改成功','guestbook_list.php');

}else{
    alert('修改失败','guestbook_list.php');
}

?>