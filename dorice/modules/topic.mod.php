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
            case 'search':
                $this->search();
                break;
            default :
                $this->main();
                break;
        }
    }
    function main(){
        $this->display('topic_index.html');
    }
    function search(){
        $key=  Get('key');
        $this->assign('key',$key);
        $this->display('topic_search_index.html');
    }
}

?>
