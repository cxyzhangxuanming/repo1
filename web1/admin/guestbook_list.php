<?php
	include('header.php');
	include('DB.php');
?>


				<div class="newslist">
					<div class="shuoming">
						<div class="header">
							<h4>留言列表</h4>
						</div>
						
					</div>

					<table>
					<tr>
							<th>ID</th>
							<th>用户名</th>
							<th>留言内容</th>
							<th>留言时间</th>
							<th>操作</th>
						</tr>
						<?php

					$pagesize=15;
					// if(isset($_GET['page'])){
					// 	$page=$_GET['page'];
					// }else{
					// 	$page=1;
					// }
					$page= isset($_GET['page']) ? $_GET['page'] : 1;
					$db = new DB();
					$sql = "select * from guestbook";
					$r=$db->get_results($sql,false);
					$records = count($r);
					$start=($page-1)*$pagesize;

					$sql= "select * from guestbook order by intime desc limit $start,$pagesize";

					$r = $db->get_results($sql,false);
							foreach($r as $k=>$value){
					echo "<tr>";
					echo "<td>".$r[$k]['id']."</td>";
					echo "<td>".$r[$k]['username']."</td>";
					echo "<td>".$r[$k]['content']."</td>";
					echo "<td >".$r[$k]['intime']."</td>";
					echo '<td><span><a href="guestbook_edit.php?id='.$r[$k]['id'].'">修改</a></span>/<span><a href="guestbook_delete.php?id='.$r[$k]['id'].'"  onclick=" return confirm(\' 你确定要删除吗 \');">删除</a></span></td>';
					echo "</tr>";
							}			
				
						?>			
					</table>

					<?php
					   echo '<div class="pag">';
					   echo '<ul class="pagination">';
							$pagecount = ceil($records/$pagesize);
							for($i=1; $i<=$pagecount; $i++){
								if($page==$i){
									echo "<li><a href='guestbook_list.php?page=$i' class='on'>$i</a></li>";
								}else{
									echo "<li><a href='guestbook_list.php?page=$i'>$i</a></li>";
								}
								
							}
					   echo '</ul>';
					   echo '</div>';

					?>
				</div>

<?php
	include('footer.php');
?>
