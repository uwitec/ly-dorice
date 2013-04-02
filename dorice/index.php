<?php 
define('BASE_PATH',$_SERVER['DOCUMENT_ROOT'].'dorice/');
define('SMARTY_PATH','core/');
define('SMARTY', 'true');
class initialize{
    function init(){
        session_start();
        @header('Content-Type: text/html; charset=UTF-8');
        require BASE_PATH.SMARTY_PATH.'Smarty.class.php';
        require BASE_PATH.SMARTY_PATH.'Smarty_Compiler.class.php'; 
        require_once 'include/global.func.php';
        if(isset($_GET['mod'])){
            $mod_ary=$_GET['mod'];
        }else{
            $mod_ary="topic";
        }
        if(isset($_GET['code'])){
            $code=$_GET['code'];
        }else{
            $code='';
        }   
        require_once 'modules/'.$mod_ary.'.mod.php';
        $smarty=new ModSmarty($mod_ary,$code);
    }
}
$init = new initialize ();
$init->init();
unset($init);
?>
