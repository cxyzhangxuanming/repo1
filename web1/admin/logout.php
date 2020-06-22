<?php
include('./public.php');
session_start();

$_SESSION=array();
session_destroy();
alert('退出成功,欢迎下次再来','./login.php');


?>