<?php
	include('header.php');
	include('DB.php');
?>				
				<div class="fabu">
					<div class="shuoming">
						<div class="header">
							<h4>发布新闻</h4>
						</div>
						<form enctype="multipart/form-data" action="news_new_save.php" method="post">
							<div class="list">
								<div class="lb">新闻标题:</div>
								<div class="inp"><input type="text" name="title"></div>

							</div>
							<div class="list">
								<div class="lb">新闻分类:</div>
								<div class="inp">
									<select name="cate_id" >
										<option value="0">请选新闻分类</option>
										<?php
										$sql ="select * from category where module='新闻中心' order by orderno asc,id desc";
										$db= new DB();
										$r=$db->get_results($sql,false);
										foreach($r as $k=>$value){
											echo '<option value="'.$r[$k]['id'].'">'.$r[$k]['catename'].'</option>';
											

										}




										?>

									</select>
								</div>

							</div>
							<div class="list">
								<div class="lb">&emsp;&emsp;作者:</div>
								<div class="inp"><input type="text" name="author"></div>

							</div>					
							<div class="list">
								<div class="lb">新闻内容:</div>
								<div class="inp"><textarea id="intro"  name="content" class="txt"></textarea>
							</div>
							</div>
							<div class="list">
								<div class="lb">&emsp;&emsp;图片:</div>
								<div class="inp"><input type="file" name="img"></div>

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
