<?php
if(isset($_GET['food'])) {
	$food = $_GET['food'];
}
    
    $foodArray = array('fish','meat','momo','tea','bacon','soup');
    if(!empty($food)){
    if(in_array($food,$foodArray))
        echo 'We do have '.$food.'!';
    else
         echo 'We DONT have '.$food.'!';

    }

?>