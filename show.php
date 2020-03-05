<?php
session_start(); // Starting Session

		$sqlx='select * from bgnow ';
		$connectionx=new mysqli("localhost","guan","gqh123","template_album");
		mysqli_query($connectionx, "set names utf8");
		$resx=mysqli_query($connectionx,$sqlx);
		$rowx=mysqli_fetch_assoc($resx);
		
		
		
		$page=$_GET['page'];
		$sql='select * from praise order by times desc';
		$connection=new mysqli("localhost","guan","gqh123","template_album");
		mysqli_query($connection, "set names utf8");
		$res=mysqli_query($connection,$sql);
		$praisenum=mysqli_num_rows($res);
		
		
	
		$per=4;
		if($rowx['a']!=1||$rowx['hex']=='777777'||$rowx['hex']=='333333'||$rowx['hex']=='000000')
		{
			for($i=0;$i<$praisenum;$i++)
			{
				$row=mysqli_fetch_assoc($res);
				if($i>=($page-1)*$per&&$i<$page*$per)
				{
					echo '
						<div >
							<i style="font-size: larger; color: white;">'.$row["content"].'</i>
							<i class="right" style="color:white;">'.$row["times"].'</i>
							<hr  style="color: #000000;" />
						</div>
					';
				}
				
			}
			echo '<div style="text-align: center;">
					<ul class="pagination">
					<li class="page-item" ><a class="page-link" href="#" onclick="showSite3(1)" style="height: 30px; padding: 5px;">首页</a></li>
					
					';
			if($page==1)
			{
				echo '
					<li class="page-item disabled" ><a class="page-link" href="#" style="height: 30px; padding: 5px;">上一页</a></li>
				';
			}
			else
			{
				echo '
					<li class="page-item" ><a class="page-link" href="#" onclick="showSite3('.$page.'-1)" style="height: 30px; padding: 5px;">上一页</a></li>
				';
			}
			$totalpage=floor(($praisenum-1)/$per);
			for($pagenum=0;$pagenum<=$totalpage;$pagenum++)
			{
				$pagenumx=$pagenum+1;
				if($page==$pagenumx)
				{
					echo '
						<li class="page-item active" ><a class="page-link" href="#" onclick="showSite3('.$pagenumx.')" style="height: 30px; padding: 5px;">'.$pagenumx.'</a></li>
					';
				}
				else
				{
					echo '
						<li class="page-item" "><a class="page-link" href="#" onclick="showSite3('.$pagenumx.')" style="height: 30px; padding: 5px;">'.$pagenumx.'</a></li>
					';
				}
				
			}
			
			if($page==$totalpage+1)
			{
				echo '
				<li class="page-item disabled" ><a class="page-link"  href="#" style="height: 30px; padding: 5px;">下一页</a></li>
				';
			}
			else{
				echo '
				<li class="page-item " ><a class="page-link" onclick="showSite3('.$page.'+1)" href="#" style="height: 30px; padding: 5px;">下一页</a></li>
				';
			}
			echo'
						
						<li class="page-item" ><a class="page-link" onclick="showSite3('.$totalpage.'+1)" href="#" style="height: 30px; padding: 5px;">末页</a></li>
					</ul>
				</div>';
		}
		else
		{
			for($i=0;$i<$praisenum;$i++)
			{
				$row=mysqli_fetch_assoc($res);
				if($i>=($page-1)*$per&&$i<$page*$per)
				{
					echo '
						<div >
							<i style="font-size: larger; color: #000000;">'.$row["content"].'</i>
							<i class="right">'.$row["times"].'</i>
							<hr  style="color: #000000;" />
						</div>
					';
				}
				
			}
			echo '<div style="text-align: center;">
					<ul class="pagination">
					<li class="page-item" ><a class="page-link" href="#" onclick="showSite3(1)" style="height: 30px; padding: 5px;">首页</a></li>
					
					';
			if($page==1)
			{
				echo '
					<li class="page-item disabled" ><a class="page-link" href="#"  style="height: 30px; padding: 5px;">上一页</a></li>
				';
			}
			else
			{
				echo '
					<li class="page-item" ><a class="page-link" href="#" onclick="showSite3('.$page.'-1)" style="height: 30px; padding: 5px;">上一页</a></li>
				';
			}
			$totalpage=floor(($praisenum-1)/$per);
			for($pagenum=0;$pagenum<=$totalpage;$pagenum++)
			{
				$pagenumx=$pagenum+1;
				if($page==$pagenumx)
				{
					echo '
						<li class="page-item active" ><a class="page-link" href="#" onclick="showSite3('.$pagenumx.')" style="height: 30px; padding: 5px;">'.$pagenumx.'</a></li>
					';
				}
				else
				{
					echo '
						<li class="page-item" "><a class="page-link" href="#" onclick="showSite3('.$pagenumx.')" style="height: 30px; padding: 5px;">'.$pagenumx.'</a></li>
					';
				}
				
			}
			
			if($page==$totalpage+1)
			{
				echo '
				<li class="page-item disabled" ><a class="page-link"  href="#" style="height: 30px; padding: 5px;">下一页</a></li>
				';
			}
			else{
				echo '
				<li class="page-item " ><a class="page-link" onclick="showSite3('.$page.'+1)" href="#" style="height: 30px; padding: 5px;">下一页</a></li>
				';
			}
			echo'
						
						<li class="page-item" ><a class="page-link" onclick="showSite3('.$totalpage.'+1)" href="#" style="height: 30px; padding: 5px;">末页</a></li>
					</ul>
				</div>';
					
			
		}

?>