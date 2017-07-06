function process(){
    
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    } else{
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }
    
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
            document.getElementById('underInput').innerHTML = xmlhttp.responseText;
        }        
    }   
    
    xmlhttp.open('GET', 'foods.php?food='+document.search.userInput.value, true);
    xmlhttp.send();
    
}
