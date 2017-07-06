<!DOCTYPE html>
<html>
<head>
<script >

function findmatch(){
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    } else{
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }
    
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
            document.getElementById('results').innerHTML = xmlhttp.responseText;
        }        
    }   
    
    xmlhttp.open('GET', 'yo1.php?search_text='+document.search.search_text.value, true);
    xmlhttp.send();
    
}

</script>
</head>

<body >

<form  method="POST" action="yo2.php">
<h3>Insert a name:</h3>
<input type="text" name="ins_name" >
<input type="submit" value="submit!">
</form>

<form id="search" name="search">
<h3>Search a name:</h3>
<input type="text" name="search_text" onkeyup="findmatch();">
</form>
<div id="results"> </div>
</body>
</html>