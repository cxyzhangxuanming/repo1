
<?php

include 'public.php';

session_start();
if(!isset($_SESSION['userid'])){
	alert('请登陆以后再来操作','./login.php');
	exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<!-- <link rel="stylesheet" href="./css/index.css"> -->
		<link rel="stylesheet" href="lib/bootstrapwendang/lib/css/bootstrap.css">
		<script src="js/jquery-1.11.0.min.js"></script>
		<script src="js/vue.min.js"></script>
		<link rel="stylesheet" href="./css/index.css">
	</head>
	<body>

		<div class="top">
			<h1>网站后台管理</h1>
			<div>
				<button><a href="./index.php">系统首页</a></button>
				<button><a href="./logout.php">安全退出</a></button>
			</div>
		</div>

		<div class="big-div">
			<div class="yonghu">
				<div class="gly">
					<h4>欢迎您来到管理后台</h4>
					<p>
						登陆名: <?php echo $_SESSION['username']; ?>
					</p>
					<p>身&emsp;份: <?php echo $_SESSION['flag']  ?></p>
				</div>

				<div class="list-div" id="root">
					<div class="list" v-for="item,index in guanli">
						<h5 @click="item.show=!item.show">{{item.title}}</h5>
						<ul>
							<li v-for="lis in item.list" v-show="item.show">
								<a :href="lis.src">{{lis.item}}</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="rbig">