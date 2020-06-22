<?php
	include('header.php');
	include('DB.php');
	$id= $_GET['id'];

	$sql =" select * from category where id =$id";
	$db= new DB();
	$r = $db->get_results($sql);
	if(!$r){
		echo '没有数据'; exit;
	}



?>				
				<div class="fabu">
					<div class="shuoming">
						<div class="header">
							<h4>修改分类</h4>
						</div>
						<form enctype="multipart/form-data" action="cate_edit_save.php" method="post">
						<input type="hidden" name="id" value="<?php echo $id ?>" />
							<div class="list">
								<div class="lb">分类名:</div>
								<div class="inp"><input type="text" name="catename" value="<?php echo $r['catename'] ?>"></div>

							</div>
							<div class="list">
								<div class="lb">所属模块:</div>
								<div class="inp">
									<select name="module" >
										<option value="新闻中心" <?php if($r['module']=='新闻中心') { echo 'selected="selected"' ;} ?>>新闻中心</option>
										<option value="产品中心" <?php if($r['module']=='产品中心') { echo 'selected="selected"' ;} ?>>产品中心</option>
									</select>
								</div>

							</div>
							<div class="list">
								<div class="lb">排序号:</div>
								<div class="inp"><input type="text" name="orderno" value="<?php echo $r['orderno'] ?>"></div>

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
