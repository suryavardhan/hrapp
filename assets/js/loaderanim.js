$(document).ready(function() { 
	//Ajax Loding display
	$(document).ajaxStart(function () { showProgress() }).ajaxStop(function () { hideProgress() });		
	
	});
	
//Ajax loading animation functions
function showProgress() {
    $('body').append('<div id="progress"><img src="http://careers.supportsages.com/assets/img/x.gif" alt=""/></div>');
    $('#progress').center();
}
function hideProgress() {
    $('#progress').remove();
}
jQuery.fn.center = function () {
    this.css("position", "absolute");
    this.css("top", ($(window).height() - this.height()) / 2 + $(window).scrollTop() + "px");
    this.css("left", ($(window).width() - this.width()) / 2 + $(window).scrollLeft() + "px");
    return this;
}		
		