<?php
if($_FILES['myfile']){
	include 'fileupload.php';
	$up = new fileupload;
	$up -> set("path",'./upfile');
	$up -> set("maxsize", 2000000000);
	$up -> set("allowtype", array("gif", "png", "jpg","jpeg"));
	if($up -> upload("myfile")) {
		// 获取上传后的文件名称
		 //print_r($up->getFileName());  // 这里返回的是一个数组
		$data = $up->getFileName();
		echo json_encode(array('status'=>1, 'data' => $data));exit();
	} else {
		echo json_encode(array('status'=>0, 'data' => $up->getErrorMsg()[0]));exit();
		
	}
}


