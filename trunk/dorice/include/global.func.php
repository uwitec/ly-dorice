<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function getUrl($type){
    if(isset($_GET[$type])){
        $option=$_GET[$type];
    }else{
        $option='';
    }
    return $option;
}

?>
