/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function showtime(){
    var now=new Date();
    var h = now.getHours();
    var good;
    if(h>=19||h<6){
        good='���Ϻ�';
    }
    if(h>=14&&h<19){
        good='�����';
    }
    if(h>=12&&h<14){
        good='�����';
    }
    if(h<12&&h>=9){
        good='�����';
    }
    if(h<9&&h>=6){
        good='���Ϻ�';
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
            alert("��Ǹ������ʹ�õ�������޷���ɴ˲�����\n\n�����ղ�ʧ�ܣ���ʹ��Ctrl+D�������");
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

