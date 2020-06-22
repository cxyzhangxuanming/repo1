<?php
	include('header.php');
	include('DB.php');
	$id= $_GET['id'];

	$sql =" select * from flink where id =$id";
	$db= new DB();
	$r = $db->get_results($sql);
	if(!$r){
		echo '没有数据'; exit;
	}
?>				
				<div class="fabu">
					<div class="shuoming">
						<div class="header">
							<h4>修改友情链接</h4>
						</div>
						<form enctype="multipart/form-data" action="flink_edit_save.php" method="post">
						<input type="hidden" name="id" value="<?php echo $id ?>" />
							<div class="list">
								<div class="lb">链接名称:</div>
								<div class="inp"><input type="text" name="title" value="<?php echo $r['title'] ?>"></div>

							</div>
							<div class="list">
								<div class="lb">链接网址:</div>
								<div class="inp"><input type="text" name="link_url" value="<?php echo $r['link_url'] ?>"></div>

							</div>
							
							<div class="list">
								<div class="lb">链接说明:</div>
								<div class="inp"><textarea id="intro"  name="content" class="txt"><?php echo $r['content'] ?></textarea>
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
