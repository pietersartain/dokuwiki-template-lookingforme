
$(document).ready(function(){

	$("body").append("<img id='bottomright' src='/dokuwiki/lib/tpl/lookingforme/images/pop.png' />");
	$("body").append("<img id='topleft' src='/dokuwiki/lib/tpl/lookingforme/images/peek.png' />");
	$("body").prepend("<div id='page'></div>");
		
	$("footer").wrap("<div id='fakefoot' />");
	$("#fakefoot").prepend("<div id='footerleft'></div>");
	$("#fakefoot").append("<div id='footerright'></div>");
	
	$("aside").wrap("<div id='fakeaside' />");

/*
	$("#bio").prepend("<img id='left' src='/dokuwiki/lib/tpl/lookingforme/images/pop.png' />");
	$("#bio").prepend("<img id='right' src='/dokuwiki/lib/tpl/lookingforme/images/pop.png' />");
*/

	$("#bio").wrap("<div id='fakebio' />");
	$("#fakebio").prepend("<div id='barleft'></div>");
	$("#fakebio").append("<div id='barright'></div>");
	$("#bio").prepend("<img src='/dokuwiki/lib/tpl/lookingforme/images/me.png' />");
	
	$("#tags").wrap("<div id='faketags' />");
	$("#faketags").prepend("<div id='barleft'></div>");
	$("#faketags").append("<div id='barright'></div>");
	
	$("#calendar").wrap("<div id='fakecalendar' />");
	$("#fakecalendar").prepend("<div id='barleft'></div>");
	$("#fakecalendar").append("<div id='barright'></div>");
	
	//$("#email-me").prepend("<span />");
});

