<?php
    include('header.php');
?>				
				<div class="fabu">
					<div class="shuoming">
						<div class="header">
							<h4>新增管理员</h4>
						</div>
						<form action="admin_new_save.php" method="post">
							<div class="list">
								<div class="lb">登陆名:</div>
								<div class="inp"><input type="text" name="username"></div>

							</div>
							<div class="list">
								<div class="lb">密码:</div>
								<div class="inp"><input type="password" name="password"></div>

							</div>
							<div class="list">
								<div class="lb">权限:</div>
								<div class="inp">
									<select name="flag" >
										<option value="1">超级管理员</option>
										<option value="2">普通管理员</option>
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
