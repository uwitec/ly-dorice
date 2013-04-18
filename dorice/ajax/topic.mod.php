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
            case 'showEmail':
                $this->showEmail();
                break;
            case 'register':
                $this->member_register();
                break;
            case 'loginSubmit':
                $this->member_login();
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
            $query= Query($sql);
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
        $check=Session('check_num');
        if($code==$check){
            echo '0';
        }else{
            echo '1';
        }
    }
    function showEmail(){
        $email=Post('email');
        $sql="select * from ly_users where email='{$email}'";
        $query=  Query($sql);
        $row=GetRow($query);
        if(!$row){
            echo '1';
        }else{
            echo '0';
        }
    }
    function member_register(){
        $name=Post('name');
        $pass=md5(Post('pass'));
        $email=Post('email');
        $re_ip=$_SERVER["REMOTE_ADDR"];
        $now_ip=$_SERVER["REMOTE_ADDR"];
        ini_set("date.timezone", "Asia/Hong_kong");
        $time=date("Y-m-d H:i:s");
        $sql="insert into ly_users (username,nickname,password,email,level,registe_ip,last_visit_time,last_login_ip,login_times) values('{$name}','{$name}','{$pass}','{$email}','1','{$re_ip}','{$time}','{$now_ip}','1')";
        $query=  Query($sql);
        if($query){
            $_SESSION['username']=$name;
            $sql="select * from ly_users where username='{$name}'";
            $query=  Query($sql);
            $row=GetRow($query);
            $_SESSION['id']=$row['id'];
            setcookie("username", $row['username'], time()+$this->cookie_expire);
            setcookie("password",$row['password'],time()+$this->cookie_expire);
            setcookie("id",$row['id'],time()+$this->cookie_expire);
            echo '0';
        }else{
            echo '1';
        }
    }
    function member_login(){
        $name=Post('name');
        $pass=md5(Post('pass'));
        $auto=Post('auto');
        $sql="select * from ly_users where username='{$name}' and password='{$pass}'";
        $query=  Query($sql);
        $row=GetRow($query);
        if($row){
            $nowip=$_SERVER['REMOTE_ADDR'];
            ini_set("date.timezone", "Asia/Hong_kong");
            $time=date("Y-m-d H:i:s");
            $sql="update ly_users set last_visit_time='{$time}',last_login_ip='{$nowip}',login_times=login_times+1 where id='{$row['id']}'";
            $query=  Query($sql);
            $rs=mysql_affected_rows();
            if($rs>0){
                $_SESSION['id']=$row['id'];
                $_SESSION['username']=$row['username'];
                if($auto==1){
                    setcookie("username", $row['username'], time()+$this->cookie_expire);
                    setcookie("password",$row['password'],time()+$this->cookie_expire);
                    setcookie("id",$row['id'],time()+$this->cookie_expire);
                }
                echo '1';
            }
        }else{
            echo '0';
        }
    }
}

?>
