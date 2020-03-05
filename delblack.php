<?php

	$link =new mysqli("localhost", "guan", "gqh123", "template_album");
			
		$id=$_GET["path"];
		$ptime1=$_GET["ptime1"];
		$ptime2=$_GET["ptime2"];
		echo $id;
		 $i = mysqli_real_escape_string($link, $id);
		 echo '<hr>';
		 echo $id;
//删除指定数据  
$sqldel="DELETE FROM black WHERE path='$i'";
 echo '<hr>';
echo $sqldel;
$link->query($sqldel);

// 删除完跳转到新闻页
header("Location:managerblack.php?ptime1=$ptime1&ptime2=$ptime2");  
?>