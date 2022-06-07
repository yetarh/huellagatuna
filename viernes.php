<?php 
	$data='';
	$filename='viernes.json';
	if(is_file($filename)){
		$data=file_get_contents($filename);
	}
	$json_arr=json_decode($data, true);
	$json_arr[]=array(
		'id'=>$_RESQUEST['id'],
		'nombre'=>$_RESQUEST['nombre'],
		'edad'=>$_RESQUEST['edad'],
		'identidadsecreta'=>$_RESQUEST['identidadsecreta'],
		'poderes'=>$_RESQUEST['poderes']
	);
	file_put_contents($filename, json_encode($json_arr));
	header("Location:http://localhost/image/viernes.html")
 ?>