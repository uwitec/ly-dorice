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
            case 'strategy':
                $this->strategy();
                break;
            case 'trends';
                $this->trends();
                break;
            case 'guide':
                $this->guide();
                break;
            case 'entertain':
                $this->entertain();
                break;
            case 'health':
                $this->health();
                break;
            default :
                $this->main();
                break;
        }
    }
    function main(){
        $this->display('topic_news_index.html');
    }
    function strategy(){
        $title='美食攻略';
        $id=  Get('id');
        $this->assign('title',$title);
        if($id==''){
            $this->display('topic_essay_index.html');
        }else{
            $this->display('topic_essay_one.html');
        }
    }
}

?>
