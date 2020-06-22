<?php
	include('header.php');
	include('DB.php');
	$id= $_GET['id'];

	$sql =" select * from product where id =$id";
	$db= new DB();
	$r = $db->get_results($sql);
	if(!$r){
		echo '没有数据'; exit;
	}
?>				
				<div class="fabu">
					<div class="shuoming">
						<div class="header">
							<h4>修改产品</h4>
						</div>
						<form enctype="multipart/form-data" action="product_edit_save.php" method="post">
						<input type="hidden" name="id" value="<?php echo $id ?>" />
							<div class="list">
								<div class="lb">产品名称:</div>
								<div class="inp"><input type="text" name="productname" value="<?php echo $r['productname'] ?>"></div>

							</div>
							<div class="list">
								<div class="lb">产品编号:</div>
								<div class="inp"><input type="text" name="pro_no" value="<?php echo $r['pro_no'] ?>"></div>

							</div>
							<div class="list">
								<div class="lb">产品分类:</div>
								<div class="inp">
									<select name="cate_id" >
										<?php  
										$sql = "select * from category where module ='新闻中心' order by orderno asc,id desc";
										$trow = $db->get_results($sql,false);
										foreach($trow as $k=>$value){
											if($r['cate_id']==$trow[$k]['id']){
												echo '<option value="'.$trow[$k]['id'].'" selected="selected">'.$trow[$k]['catename'].'</option>';
											}
											else{
												echo '<option value="'.$trow[$k]['id'].'">'.$trow[$k]['catename'].'</option>';
											}
									
										}
										?>
									</select>
								</div>

							</div>			
							<div class="list">
								<div class="lb">产品描述:</div>
								<div class="inp"><textarea id="intro"  name="content" class="txt"><?php echo $r['content'] ?></textarea>
							</div>
							</div>
							<div class="list">
								<div class="lb">&emsp;&emsp;图片:</div>
								<div class="inp">
									<img src="../files/<?php echo $r['img']; ?>" />
								<input type="file" name="img" value="<?php echo $r['img'] ?>"></div>
								<input type="hidden" name="oldimg" value="<?php $r['img'];?>" />
							</div>	
							<div class="list">
								<div class="lb"></div>
								<div class="inp"><input class="btn" type="submit" value="提交" />
								</div>
								</div>
						</form>
						<script type="text/javascript" src="assets/utf8-php/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="assets/utf8-php/ueditor.all.js"></script>

<script type="text/javascript">
    var ue = UE.getEditor("intro");  //实例化编辑器  传参,id为将要被替换的容器。
    ue.ready(function(){
        ue.setHeight(300);
    });
</script>
					</div>
				</div>
			</div>
		
<?php
    include('footer.php');
?>
