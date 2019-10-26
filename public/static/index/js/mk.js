// 马克笔记页面动态获取高度
function mkHeight (){
	var pageHeight = $('#MK').contents().find('#preview-contents').outerHeight();
	$('#MK').contents().find('body').css('marginTop','-30px');
	$('#MK').css('height',pageHeight+'px');	
}
window.onload = mkHeight;
setInterval(function(){
    mkHeight();
},1500)


