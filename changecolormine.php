<?php

	$link =new mysqli("localhost", "guan", "gqh123", "template_album");
			
		$r=$_GET["r"];
		$g=$_GET["g"];
		$b=$_GET["b"];
		$a=$_GET["a"];
		$hex=$_GET["hex"];
		// $xxx="#";
		// $hex=$xxx.$hex;
		echo $hex;
	$sql="update bgnow set r='$r',g='$g',b='$b',a='$a',hex='$hex'"	;
	
	$link->query($sql);


header("Location:mine.php");  
?>