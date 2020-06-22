<?php
    include('header.php');
    include('./DB.php');
?>
				<div class="newslist">
					<div class="shuoming">
						<div class="header">
							<h4>单页列表</h4>
						</div>
					</div>
					<table>
						<tr>
							<th>ID</th>
							<th>模块名</th>
							<th>内容</th>
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
						$sql = "select * from board";
						$r=$db->get_results($sql,false);
						// echo '<pre>';
						// echo print_r($r,true);
						// echo '</pre>';
						$records = count($r);
						$start=($page-1)*$pagesize;
	
						$sql= "select * from board order by id asc limit $start,$pagesize";
	
						 $r = $db->get_results($sql,false);							
							foreach($r as $k=>$v){
								echo "<tr>";
								 echo '<td>'.$r[$k]['id'].'</td>';
								 echo '<td>'.$r[$k]['boardname'].'</td>';
								 echo '<td>'.mb_substr(strip_tags($r[$k]['content']),0,80,'utf-8').'...</td>';
								 echo '<td><span><a href="page_edit.php?id='.$r[$k]['id'].'">修改</a></span>/<span><a href="page_delete.php?id='.$r[$k]['id'].'" onclick=" return confirm(\' 你确定要删除吗 \');">删除</a></span></td>';
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
									echo "<li><a href='page_list.php?page=$i' class='on'>$i</a></li>";
								}else{
									echo "<li><a href='page_list.php?page=$i'>$i</a></li>";
								}
								
							}
					   echo '</ul>';
					   echo '</div>';

					?>
					
				</div>

<?php
	include('footer.php');
?>
