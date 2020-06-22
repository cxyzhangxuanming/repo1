<?php

    include('./DB.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(strlen($username)<1){
        echo '用户名不能为空!';
        exit;
    }

    if(strlen($password)<6){
        echo '密码不能小于6位';exit;
    }

    echo '数据已正常提交';

    $db = new DB();
    $sql = "select * from admin where username='$username' and password='$password'";
    
     $r = $db->get_results($sql);

     echo '<pre>';
     echo print_r($r,true);
     echo '</pre>';

    if($r){
        session_start();
        $_SESSION['username']=$r['username'];
        $_SESSION['userid']=$r['id'];
        $_SESSION['flag']= $r['flag']=='1' ?'超级管理员' :'普通管理员';
        header('Location: index.php');
    }else{
        echo '登陆失败','用户名或密码错误';
        exit;
    }

?>