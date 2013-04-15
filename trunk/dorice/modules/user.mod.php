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
            case 'login':
                $this->member_login();
                break;
            case 'register':
                $this->member_register();
                break;
            case 'checkcode':
                $this->checkCode();
                break;
            default :
                $this->member_login();
                break;
        }
    }
    function member_login(){
        $this->display('topic_login.html');
    }
    function member_register(){
        $this->display('topic_register.html');
    }
    function checkCode(){
        $num=6;
        $size=21;
        $width=0;
        $height=0;
        !$width && $width = $num*$size*4/5-5; 
        !$height && $height = $size + 14; 

        $str = "0123456789abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVW"; 
        $code = ''; 
        for ($i=0; $i<$num; $i++){ 
                $code.= $str[mt_rand(0, strlen($str)-1)]; 
        } 
        $_SESSION['check_num']=$code;
        // 画图像 
        $im = imagecreatetruecolor($width,$height); 
        // 定义要用到的颜色 
        $back_color = imagecolorallocate($im, 235, 236, 237); 
        $boer_color = imagecolorallocate($im, 118, 151, 199); 
        $text_color = imagecolorallocate($im, mt_rand(0,200), mt_rand(0,120), mt_rand(0,120)); 

            // 画背景 
        imagefilledrectangle($im,0,0,$width,$height,$back_color); 
            // 画边框 
        imagerectangle($im,0,0,$width-1,$height-1,$boer_color); 
            // 画干扰线 
        for($i=0;$i<20;$i++){ 
            $font_color = imagecolorallocate($im, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255)); 
            imagearc($im,mt_rand(-$width,$width),mt_rand(-$height,$height),mt_rand(30,$width*2),mt_rand(20,$height*2),mt_rand(0,360),mt_rand(0,360),$font_color); 
        } 
        // 画干扰点 
        for($i=0;$i<120;$i++){ 
            $font_color = imagecolorallocate($im, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255)); 
            imagesetpixel($im,mt_rand(0,$width),mt_rand(0,$height),$font_color); 
        } 
        // 画验证码 
        @imagefttext($im, $size , 0, 5, $size+4, $text_color, 'c:\\WINDOWS\\Fonts\\simsun.ttc',$code); 
        header("Cache-Control: max-age=1, s-maxage=1, no-cache, must-revalidate"); 
        header("Content-type: image/png"); 
        imagepng($im); 
        imagedestroy($im);
    }
}

?>
