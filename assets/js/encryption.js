function convertMoji2_shtml(t){
var s="",moji="";
for(var i=0;i<t.length;i++){
moji=t.charCodeAt(i);
s +=String.fromCharCode(moji+1);
}
return s;
}
var em_shtml=convertMoji2_shtml(String.fromCharCode(104,109,101,110,63,104,121,103,96,110)+String.fromCharCode(113,104,45,98,110,108));
document.write("<a href=\"mai"+"lto:"+em_shtml+"\">"+em_shtml+"</a>");
