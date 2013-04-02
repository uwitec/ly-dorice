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
            case 'order_month':
                $this->orderMonth();
                break;
            default :
                $this->main();
                break;
        }
    }
    function main(){
        $this->display('topic_rank_index.html');
    }
    function orderMonth(){
        $ti='本月热门餐厅排行榜';
        $this->assign('ti',$ti);
        $this->display('topic_rank_one.html');
    }
}

?>
