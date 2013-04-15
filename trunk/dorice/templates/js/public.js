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

