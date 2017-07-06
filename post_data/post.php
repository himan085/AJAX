<!DOCTYPE html>
<html>
<head>
<script >

function insert(){

if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    } else{
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }
    
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
            document.getElementById('message').innerHTML = xmlhttp.responseText;
        }        
    }   
    
param = 'text='+document.getElementById('text').value;

    xmlhttp.open('POST', 'update.php', true);
    xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    xmlhttp.send(param);
   
}

</script>
</head>

<body >
Insert:<input type="text" id="text" name="text">
<input type="button" value="submit" onClick="insert();">
<div id="message" > </div>
<h3>Top 5 rececnt posts</h3>
<?php
mysql_connect('localhost','root','');
	mysql_select_db('ajax');

$query = "SELECT post FROM data ORDER BY id DESC LIMIT 5";
$query_run = mysql_query($query);

while($row = mysql_fetch_assoc($query_run)){

	echo $row['post'].'<br/><br/>';
}


?>
</body>
</html>