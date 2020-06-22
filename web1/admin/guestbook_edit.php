<?php
	include('header.php');
	include('DB.php');
	$id= $_GET['id'];

	$sql =" select * from guestbook where id =$id";
	$db= new DB();
	$r = $db->get_results($sql);
	if(!$r){
		echo '你要修改的留言不存在'; exit;
	}
?>				
				<div class="fabu">
					<div class="shuoming">
						<div class="header">
							<h4>修改留言</h4>
						</div>
						<form enctype="multipart/form-data" action="guestbook_edit_save.php" method="post">
						<input type="hidden" name="id" value="<?php echo $id ?>" />
							<div class="list">
								<div class="lb">用户名:</div>
								<div class="inp"><input type="text" name="username" value="<?php echo $r['username'] ?>"></div>

							</div>
							<div class="list">
								<div class="lb">留言内容:</div>
								<div class="inp"><textarea class="txt" name="content"><?php echo $r['content'] ?></textarea></div>

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
