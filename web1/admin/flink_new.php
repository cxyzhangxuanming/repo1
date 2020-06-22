<?php
    include('header.php');
?>				
				<div class="fabu">
					<div class="shuoming">
						<div class="header">
							<h4>新增友情链接</h4>
						</div>
						<form action="flink_new_save.php" method="post">
							<div class="list">
								<div class="lb">链接名称:</div>
								<div class="inp"><input type="text" name="title"></div>

							</div>
							<div class="list">
								<div class="lb">链接地址:</div>
								<div class="inp"><input type="text" name="link_url"></div>

							</div>
						
							<div class="list">
								<div class="lb">说明内容:</div>
								<div class="inp"><textarea class="txt" name="content"></textarea>
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
