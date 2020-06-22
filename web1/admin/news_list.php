<?php
	include('header.php');
	include('DB.php');
?>


				<div class="newslist">
					<div class="shuoming">
						<div class="header">
							<h4>新闻列表</h4>
						</div>
						
					</div>

					<table>
					<tr>
							<th>ID</th>
							<th>标题</th>
							<th>摘要</th>
							<th>日期</th>
							<th>点击率</th>
							<th>操作</th>
						</tr>
						<?php
					// 		$sql = "select * from news order by intime desc";
					// 		$db = new DB();
					// 		$r = $db->get_results($sql,false);
					// 		foreach($r as $k=>$value){
					// echo "<tr>";
					// echo "<td>".$r[$k]['id']."</td>";
					// echo "<td>".$r[$k]['title']."</td>";
					// echo "<td>".mb_substr(strip_tags($r[$k]['content']),0,80)."</td>";
					// echo "<td>".$r[$k]['intime']."</td>";
					// echo "<td >".$r[$k]['hits']."</td>";
					// echo '<td><span><a href="news_edit.php?id='.$r[$k]['id'].'">修改</a></span>/<span><a href="news_delete.php?id='.$r[$k]['id'].'"  onclick=" return confirm(\' 你确定要删除吗 \');">删除</a></span></td>';
					// echo "</tr>";
					// 		}

					$pagesize=15;
					// if(isset($_GET['page'])){
					// 	$page=$_GET['page'];
					// }else{
					// 	$page=1;
					// }
					$page= isset($_GET['page']) ? $_GET['page'] : 1;
					$db = new DB();
					$sql = "select * from news";
					$r=$db->get_results($sql,false);
					$records = count($r);
					$start=($page-1)*$pagesize;

					$sql= "select * from news order by intime desc limit $start,$pagesize";

					$r = $db->get_results($sql,false);
							foreach($r as $k=>$value){
					echo "<tr>";
					echo "<td>".$r[$k]['id']."</td>";
					echo "<td>".$r[$k]['title']."</td>";
					echo "<td>".mb_substr(strip_tags($r[$k]['content']),0,80)."</td>";
					echo "<td>".$r[$k]['intime']."</td>";
					echo "<td >".$r[$k]['hits']."</td>";
					echo '<td><span><a href="news_edit.php?id='.$r[$k]['id'].'">修改</a></span>/<span><a href="news_delete.php?id='.$r[$k]['id'].'"  onclick=" return confirm(\' 你确定要删除吗 \');">删除</a></span></td>';
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
									echo "<li><a href='news_list.php?page=$i' class='on'>$i</a></li>";
								}else{
									echo "<li><a href='news_list.php?page=$i'>$i</a></li>";
								}
								
							}
					   echo '</ul>';
					   echo '</div>';

					?>
					    <!-- <div class="pag">
							<ul class="pagination">
								<li><a href="#">&laquo;</a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">&raquo;</a></li>
							</ul>
						</div> -->
				</div>

<?php
	include('footer.php');
?>
