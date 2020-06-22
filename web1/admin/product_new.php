<?php
	include('header.php');
	include('DB.php');
?>				
				<div class="fabu">
					<div class="shuoming">
						<div class="header">
							<h4>新增产品</h4>
						</div>
						<form enctype="multipart/form-data" action="product_new_save.php" method="post">
							<div class="list">
								<div class="lb">产品名称:</div>
								<div class="inp"><input type="text" name="productname"></div>

							</div>
							<div class="list">
								<div class="lb">产品编号:</div>
								<div class="inp"><input type="text" name="pro_no"></div>

							</div>
						
							<div class="list">
								<div class="lb">产品分类:</div>
								<div class="inp">
									<select  name="cate_id" >
										<option value="0">请选择产品分类</option>
										<?php 
										$sql = "select * from category where module='产品中心' order by orderno asc,id desc";
										$db= new DB();
										$r = $db->get_results($sql,false);
												foreach($r as $k=>$value){									
										echo '<option value = "'.$r[$k]['id'].'">'.$r[$k]['catename'].'</option>';
												}
										?>													
									</select>
								</div>
							</div>
							<div class="list">
								<div class="lb">产品描述:</div>
								<div class="inp">
								<textarea id="intro"  name="content" class="txt"></textarea>
								</div>

							</div>
							<div class="list">
								<div class="lb">产品图片:</div>
								<div class="inp"><input type="file" name="img"></div>

							</div>
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
