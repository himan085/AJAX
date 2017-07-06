<?php

mysql_connect('localhost','root','');
	mysql_select_db('ajax');

if(isset($_POST['text'])){
	$text = $_POST['text'];
	if(!empty($text)){
		$query = "INSERT INTO data VALUES ('','".mysql_real_escape_string($text)."')";
		if($query_run=mysql_query($query)){
			echo "<meta http-equiv=\"refresh\" content=\"0;URL=post.php\">";
		}else{
			echo 'FAILED!';
		}

	}
else{
	echo 'Please type in something!';
}
}

?>