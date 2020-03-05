<?php
	
	$db = mysqli_connect("localhost", "guan", "gqh123", "template_album");
	
	// echo $_POST['username'];
	$upfile=$_FILES["pic"];
	$typelist=array("image/jpeg","image/jpg","image/png","image/gif");
	$path="picb/l/ac/k/";//定义一个上传后的目录
//2.过滤上传文件的错误号
if($upfile["error"]>0){
    switch($upfile['error']){//获取错误信息
        case 1:
            $info="上传得文件超过了 php.ini中upload_max_filesize 选项中的最大值.";
            break;
        case 2:
            $info="上传文件大小超过了html中MAX_FILE_SIZE 选项中的最大值.";
            break;
        case 3:
            $info="文件只有部分被上传";
            break;
        case 4:
            $info="没有文件被上传.";
            break;
        case 5:
            $info="找不到临时文件夹.";
            break;
        case 6:
            $info="文件写入失败！";break;
    }
	// echo "上传文件错误,原因:".$info;
	die("上传文件错误,原因:".$info);
	
}
if(!in_array($upfile["type"],$typelist)){
	// echo "上传文件类型非法!".$upfile['type'];
    die("上传文件类型非法!".$upfile["type"]);
}
$fileinfo=pathinfo($upfile["name"]);//解析上传文件名字
do{
    $newfile=date("YmdHis").rand(1000,9999).".".$fileinfo["extension"];
}while(file_exists($path.$newfile));
if(is_uploaded_file($upfile["tmp_name"]))
{
	if(move_uploaded_file($upfile["tmp_name"],$path.$newfile))
	{
		echo "文件上传成功!";
		
		session_start();
		$username=$_SESSION['login_user'];
		$ptime=$_POST['ptime'];
		$story=$_POST['story'];
		
		$connection=new mysqli("localhost", "guan", "gqh123", "template_album");
		mysqli_query($connection, "set names utf8");
		$connection->query("insert into black(path,ptime,story,user) 
		values('$path$newfile','$ptime','$story','$username')");
		
		header('location:managerblack.php');
	}
	else{
		// echo "上传图片失败！";
        die("上传图片失败！");
		}
}
else{
	// echo "不是一个上传文件!";
    die("不是一个上传文件!");
}

	
	
	
	
	
	
?>