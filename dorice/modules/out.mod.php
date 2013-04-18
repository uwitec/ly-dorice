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
    var $ID;
    function ModSmarty($mod,$code){
        $this->config();
        $id=  GetID('id');
        $this->ID=$id;
        $this->code=$code;
        $this->mod=$mod;
        $this->assign('ID',$this->ID);
        $this->assign('mod', $this->mod);
        $this->assign('code', $this->code);
        $member=member($this->ID);
        $this->assign('member',$member);
        $this->Execute();
    }
    function Execute(){
        switch ($this->code){
    
            default :
                $this->main();
                break;
        }
    }
    function main(){
        $this->display('topic_out_index.html');
    }
    
}

?>
