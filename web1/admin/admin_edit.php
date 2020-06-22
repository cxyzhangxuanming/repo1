<?php
	include('header.php');
	include('DB.php');
	$id= $_GET['id'];

	$sql =" select * from admin where id =$id";
	$db= new DB();
	$r = $db->get_results($sql);
	if(!$r){
		echo '没有数据'; exit;
	}
?>				
				<div class="fabu">
					<div class="shuoming">
						<div class="header">
							<h4>修改管理员</h4>
						</div>
						<form enctype="multipart/form-data" action="admin_edit_save.php" method="post">
						<input type="hidden" name="id" value="<?php echo $id ?>" />
							<div class="list">
								<div class="lb">登陆名:</div>
								<div class="inp"><input type="text" name="username" value="<?php echo $r['username'] ?>"></div>

							</div>
							<div class="list">
								<div class="lb">密码:</div>
								<div class="inp"><input type="password" name="password" value="<?php echo $r['password'] ?>"></div>

							</div>
							<div class="list">
								<div class="lb">权限:</div>
								<div class="inp">
									<select name="flag">
										<option value="1" <?php if($r['flag']==1) echo 'selected="selected"' ?>>超级管理员</option>
										<option value="2" <?php if($r['flag']==2) echo 'selected="selected"' ?>>普通管理员</option>

									</select>
								</div>

							</div>
			
							<div class="list">
								<div class="lb"></div>
								<div class="inp"><input class="btn" type="submit" value="提交" />
								</div>
								</div>
						</form>
					</div>
				</div>
			</div>
		
<?php
    include('footer.php');
?>
