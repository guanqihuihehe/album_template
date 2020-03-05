<?php

	$link =new mysqli("localhost", "guan", "gqh123", "template_album");
			
		$id=$_GET["path"];
		$ptime1=$_GET["ptime1"];
		$ptime2=$_GET["ptime2"];
		echo $id;
		 $i = mysqli_real_escape_string($link, $id);
		 if(file_exists($i))
		 {
			 unlink($i);
		 }
		 echo '<hr>';
		 echo $id;
//删除指定数据  
$sqldel="DELETE FROM picture WHERE path='$i'";
 echo '<hr>';
echo $sqldel;
$link->query($sqldel);

// 删除完跳转到新闻页
header("Location:managerindex.php?ptime1=$ptime1&ptime2=$ptime2");  
?>