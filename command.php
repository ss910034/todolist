<?php
	header("Content-Type:text/html;charset=utf-8");
	header('Access-Control-Allow-Origin:*');
	mb_internal_encoding('utf-8');

	if(isset($_GET['type'])){
		$type = $_GET['type'];
		$name = $_GET['name'];
		$data = $_GET['data'];

		$get_name_list = Array();
		$get_name_list['itemdata'] = "data/itemdata.txt";
		$get_name_list['notifydata'] = "data/notifydata.txt";
		$get_name_list['tododata']  = "data/tododata.txt";

		if($type == "get"){
			foreach ($get_name_list as $key => $value) {
				if($name == $key){
					echo file_get_contents($value);
				}elseif ($type == "save") {
					foreach ($get_name_list as $key => $value) {
						if($name == $key){
							echo $file_get_contents($value,$data);
						}
						echo $name." saveok!";
					}
				}
			}
		}
	}

?>