<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function Get($type){
    if(isset($_GET[$type])){
        $option=$_GET[$type];
    }else{
        $option='';
    }
    return $option;
}
function Post($type){
    return $_POST[$type];
}
function Session($type,$value){
    $_SESSION[$type]=$value;
}
function GetSession($type){
    return $_SESSION[$type];
}
function Query($sql){
    return mysql_query($sql);
}
function GetRow($query){
    return mysql_fetch_array($query);
}
?>
