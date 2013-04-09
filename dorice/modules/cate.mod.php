<?php
/**
 * Description of topic
 *
 * @author kappa
 */
if(!defined('SMARTY'))
{
    exit('invalid request');
}
class ModSmarty extends Smarty{
    var $code;
    var $mod;
    function ModSmarty($mod,$code){
        $this->config();
        $this->code=$code;
        $this->mod=$mod;
        $this->assign('mod', $this->mod);
        $this->assign('code', $this->code);
        $this->Execute();
    }
    function Execute(){
        switch ($this->code){
            case 'info':
                $this->cateInfo();
                break;
            default :
                $this->main();
                break;
        }
    }
    function main(){
        $this->display('topic_cate_index.html');
    }
    function cateInfo(){
        $this->display('topic_cate_info.html');
    }
}

?>
