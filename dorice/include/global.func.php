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
    if(isset($_POST[$type])){
        $option=$_POST[$type];
    }else{
        $option='';
    }
    return $option;
}
function Session($type){
    if(isset($_SESSION[$type])){
        $option=$_SESSION[$type];
    }else{
        $option='';
    }
    return $option;
}
function Cookie($type){
    if(isset($_COOKIE[$type])){
        $option=$_COOKIE[$type];
    }else{
        $option='';
    }
    return $option;
}
function GetID($type){
    $option=  Session($type);
    if($option==""){
        $option=  Cookie($type);
    }
    return $option;
}
function Query($sql){
    return mysql_query($sql);
}
function GetRow($query){
    return mysql_fetch_array($query);
}
function member($id){
    if($id>0){
        $sql="select * from ly_users where id='{$id}'";
        $query=  Query($sql);
        $row=GetRow($query);
        return $row;
    }
}
function randstr($length) {
    $hash = '';
    $chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $max = strlen($chars) - 1;
    mt_srand((double)microtime() * 1000000);
    for($i = 0; $i < $length; $i++) {
    $hash .= $chars[mt_rand(0, $max)];
    }
    return $hash;
}
?>
