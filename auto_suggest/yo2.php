<?php

if(@mysql_connect('localhost','root','')){
	if(@mysql_select_db('ajax')){echo 'Connected successfully!!<br>';
      if(isset($_POST['ins_name']) ){
      	 $name=$_POST['ins_name'];

      	if(!empty($name)){
      		$result = mysql_query("INSERT INTO aj (Id,Name) VALUES ('','$name') ");
      		if($result) echo $name.' Name inserted successfully!!<br>';
      	}
      }
	}
	}

?>