/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function showtime(){
    var now=new Date();
    var h = now.getHours();
    var good;
    if(h>=19||h<6){
        good='晚上好';
    }
    if(h>=14&&h<19){
        good='下午好';
    }
    if(h>=12&&h<14){
        good='中午好';
    }
    if(h<12&&h>=9){
        good='上午好';
    }
    if(h<9&&h>=6){
        good='早上好';
    }
    document.write(good);
    //alert(good);
}
function AddFavorite(title, url) {
    try {
        window.external.addFavorite(url, title);
    }
    catch (e) {
        try {
            window.sidebar.addPanel(title, url, "");
        }
    catch (e) {
            alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
        }
    }
}
function showLoginPanel(){
    var MyAjax=$.post("ajax.php?mod=topic&code=showLoginPanel",{},function(d){
       $("body").append(d);
    });
}
function closeLogin(){
    $("#showPanel,#showLogin,#showLoginCon").remove();
}
function registerSubmit(){
    var name=$("#username").val().replace(/^\s+|\s+$/g,'');
    var pass1=$("#password1").val();
    var pass2=$("#password2").val();
    var email=$("#email").val().replace(/^\s+|\s+$/g,'');
    var code=$("#code").val().replace(/^\s+|\s+$/g,'');
    if(showName(name)==true&&showPass(pass1,1)==true&&showPass(pass2,2)==true&&showEmail(email)==true&showCode(code)==true&&showAgree()==true){
        var MyAjax=$.post("ajax.php?mod=topic&code=register",{name:name,pass:pass2,email:email},function(d){
            //alert(d)
            if(d==0){
                $(".listCon:eq(6)").html("<span class='right'>注册成功，3秒钟之后转入首页...</span>");
                setTimeout("window.location.href='index.php'",3000);
                //window.location.href='index.php';
            }else{
                $(".listCon:eq(6)").html("<span class='error'>注册失败</span>");
            }
        });
    }
}
function showName(val){
    var name=val.replace(/^\s+|\s+$/g,'');
    if(name.length==0){
        $(".listCon:eq(0)").html("<span class='error'>请输入用户名</span>");
        return false;
    }
    if(name.length<4||name.length>21){
        $(".listCon:eq(0)").html("<span class='error'>用户名长度为4-20个字符</span>");
        return false;
    }
    var reg = "^[0-9a-zA-Z\u4e00-\u9fa5]+$"; 
    var re = new RegExp(reg); 
    if (!re.test(name)) { 
        $(".listCon:eq(0)").html("<span class='error'>用户名只能由数字、字母和汉字组成</span>");
        return false; 
    } 
    var MyAja=$.post("ajax.php?mod=topic&code=showName",{name:name},function(d){
       // alert(d)
        if(d==0){
            $(".listCon:eq(0)").html("<span class='right'></span>");
            return true;
        }
        if(d==1){
            $(".listCon:eq(0)").html("<span class='error'>该用户名已被注册</span>");
            return false;
        }
       return false;
    });
   return true;
}
function showPass(val,type){
    if(type==1){
        if(val.length==0){
            $(".listCon:eq(1)").html("<span class='error'>请输入密码</span>");
            return false;
        }
        if(val.length<6||val.length>16){
            $(".listCon:eq(1)").html("<span class='error'>密码长度为6-16个字符</span>");
            return false;
        }
        $(".listCon:eq(1)").html("<span class='right'></span>");
        return true;
    }else{
        var pass=$("#password1").val();
        if(pass==""&&val==""){
            $(".listCon:eq(2)").html("<span class='error'>请输入密码</span>");
            return false;
        }
        if(val!=pass){
            $(".listCon:eq(2)").html("<span class='error'>两次输入的密码不一致</span>");
            return false;
        }
        $(".listCon:eq(2)").html("<span class='right'></span>");
        return true;
    }
}
function showEmail(val){
    val=val.replace(/^\s+|\s+$/g,'');
    if(val.length==0){
        $(".listCon:eq(3)").html("<span class='error'>请输入邮箱地址</span>");
        return false;
    }
    var email=/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;
    var em = new RegExp(email);
    if(!em.test(val)){
        $(".listCon:eq(3)").html("<span class='error'>邮箱格式不正确</span>");
        return false;
    }
    var myAjax=$.post("ajax.php?mod=topic&code=showEmail",{email:val},function(d){
        if(d==1){
            $(".listCon:eq(3)").html("<span class='right'></span>");
            return true;
        }else{
            $(".listCon:eq(3)").html("<span class='error'>邮箱已被使用</span>");
            return false;
        }
    });
    return true;
}
function showCode(val){
    val=val.replace(/^\s+|\s+$/g,'');
    if(val.length==0){
        $(".listCon:eq(4)").html("<span class='error'>请输入验证码</span>");
        return false;
    }
    var MyAjax=$.post("ajax.php?mod=topic&code=showCode",{code:val},function(d){
        //alert(d)
        if(d==0){
            $(".listCon:eq(4)").html("<span class='right'></span>");
            return true;
        }else{
            $(".listCon:eq(4)").html("<span class='error'>验证码输入不正确</span>");
            return false;
        }
    });
    return true;
}
function reloadCode(){
    var src="index.php?mod=user&code=checkcode&n="+Math.random();
    $("#checkNum").attr("src",src);
}
function showAgree(){
    if($("#agree").is(":checked")){
        $(".listCon:eq(5)").html("<span class='right'></span>");
        return true;
    }else{
        $(".listCon:eq(5)").html("<span class='error'>请选中协议</span>");
        return false; 
    }
}
function showState(t){
    if(t==1){
        $(".listCon:eq(0)").html("4-20位小写字母、数字或汉字（汉字算两位）组成");
    }
    if(t==2){
        $(".listCon:eq(1)").html("密码必须在6-16个字符之间，可由数字和字母或符号组成");
    }
    if(t==3){
        $(".listCon:eq(2)").html("请再输入一遍您上面输入的密码");
    }
    if(t==4){
        $(".listCon:eq(3)").html("在您密码丢失时可以帮助您顺利的找回密码，请您提供准确的邮箱地址");
    }
    if(t==5){
        $(".listCon:eq(4)").html("请输入图象中的字符,点击验证码刷新");
    }
}
function loginSubmit(){
    var name=$("#username").val().replace(/^\s+|\s+$/g,'');
    var pass=$("#password").val();
    if($("#remember").is(":checked")){
        var auto=1;
    }else{
        auto=0;
    }
    var myAjax=$.post("ajax.php?mod=topic&code=loginSubmit",{name:name,pass:pass,auto:auto},function(d){
        //alert(d);
        if(d==1){
            //$("#showError").html('登录成功，3秒钟后转入多爱食首页...');
            //setTimeout("window.location.href='index.php'",3000);
            window.location.href='index.php';
        }
        if(d==0){
            $("#showError").html('用户名或密码错误');
        }
    });
}
function seekPassword(){
    var uname=$("#Uname").val().replace(/^\s+|\s+$/g,'');
    var uemail=$("#Uemail").val().replace(/^\s+|\s+$/g,'');
    if(uname.length==0){
        $(".listCon:eq(0)").html("<span class='error'>请输入用户名</span>");
        return false;
    }else{
        $(".listCon:eq(0)").html("");
    }
    if(uemail.length==0){
        $(".listCon:eq(1)").html("<span class='error'>请输入注册邮箱地址</span>");
        return false;
    }else{
        $(".listCon:eq(1)").html("");
    }
    var myAjax=$.post("ajax.php?mod=topic&code=seekPassword",{uname:uname,uemail:uemail},function(d){
        alert(d);
        if(d==2){
           $(".listCon:eq(2)").html("<span class='error'>用户名或邮箱输入不正确</span>"); 
           return false;
        }else{
            alert('修改新密码');
            return true;
        }
    });
    return true;
}
