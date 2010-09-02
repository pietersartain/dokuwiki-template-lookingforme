jQuery.noConflict()(function(){

//jQuery(document).ready(function(){

	jQuery("body").append("<img id='bottomright' src='"+DOKU_TPL+"images/pop.png' />");
	jQuery("body").append("<img id='topleft' src='"+DOKU_TPL+"images/peek.png' />");
	jQuery("body").prepend("<div id='page'></div>");
		
	jQuery("footer").wrap("<div id='fakefoot' />");
	jQuery("#fakefoot").prepend("<div id='footerleft'></div>");
	jQuery("#fakefoot").append("<div id='footerright'></div>");
	
	jQuery("aside").wrap("<div id='fakeaside' />");

/*
	$("#bio").prepend("<img id='left' src='/dokuwiki/lib/tpl/lookingforme/images/pop.png' />");
	$("#bio").prepend("<img id='right' src='/dokuwiki/lib/tpl/lookingforme/images/pop.png' />");
*/

	jQuery("#bio").wrap("<div id='fakebio' />");
	jQuery("#fakebio").prepend("<div id='barleft'></div>");
	jQuery("#fakebio").append("<div id='barright'></div>");
	jQuery("#bio").prepend("<img src='"+DOKU_TPL+"images/me.png' />");
	
	jQuery("#tags").wrap("<div id='faketags' />");
	jQuery("#faketags").prepend("<div id='barleft'></div>");
	jQuery("#faketags").append("<div id='barright'></div>");
	
	jQuery("#calendar").wrap("<div id='fakecalendar' />");
	jQuery("#fakecalendar").prepend("<div id='barleft'></div>");
	jQuery("#fakecalendar").append("<div id='barright'></div>");
	
	//$("#email-me").prepend("<span />");
//});

});
