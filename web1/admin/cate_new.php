<?php
    include('header.php');
?>				
				<div class="fabu">
					<div class="shuoming">
						<div class="header">
							<h4>新增分类</h4>
						</div>
						<form enctype="multipart/form-data" action="cate_new_save.php" method="post">
							<div class="list">
								<div class="lb">分类名:</div>
								<div class="inp"><input type="text" name="catename"></div>

							</div>
							<div class="list">

								<div class="lb">所属版块:</div>
								<div class="inp">
									<select name="module" >
										<option value="新闻中心">新闻中心</option>
										<option value="产品中心">产品中心</option>					
									</select>
								</div>

							</div>
							<div class="list">
								<div class="lb">排序号:</div>
								<div class="inp"><input type="text" name="orderno" value="1"></div>

							</div>					
							<div class="list">
								<div class="lb"></div>
								<div class="inp"><input class="btn" type="submit" value="提交" />
								</div>
							</div>
						</form>
						<script type="text/javascript" src="assets/utf8-php/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<!-- <script type="text/javascript" src="assets/utf8-php/ueditor.all.js"></script>

<script type="text/javascript">
    var ue = UE.getEditor("intro");  //实例化编辑器  传参,id为将要被替换的容器。
    ue.ready(function(){
        ue.setHeight(300);
    });
</script> -->
					</div>
				</div>
			</div>
		
<?php
    include('footer.php');
?>
