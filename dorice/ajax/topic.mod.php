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
            case 'showLoginPanel':
                $this->showLoginPanel();
                break;
            case 'showName':
                $this->showName();
                break;
            case 'showCode':
                $this->showCode();
                break;
            case 'register':
                $this->member_register();
                break;
            default :
                $this->main();
                break;
        }
    }
    function main(){
        exit;
    }
    function showLoginPanel(){    
        $this->display('topic_show_login.html');
    }
    function showName(){
        $name=trim(Post('name'));
        if($name!=""){
            $sql="select * from ly_users where username='{$name}'";
            $query=  Query($sql);
            $row=GetRow($query);
            if($row){
                echo '1';
            }else{
                echo '0';
            }
        }
    }
    function showCode(){
        $code=Post('code');
        $check=  GetSession('check_num');
        if($code==$check){
            echo '0';
        }else{
            echo '1';
        }
    }
    function member_register(){
        $name=Post('name');
        $pass=md5(Post('pass'));
        $email=Post('email');
        $re_ip=$_SERVER["REMOTE_ADDR"];
        $now_ip=$_SERVER["REMOTE_ADDR"];
        $sql="insert into ly_users (username,nickname,password,email,level,registe_ip,last_login_ip,login_times,online_state) values('{$name}','{$name}','{$pass}','{$email}','1','{$re_ip}','{$now_ip}','1','1')";
        $query=  Query($sql);
        if($query){
            echo '0';
        }else{
            echo '1';
        }
    }
}

?>
