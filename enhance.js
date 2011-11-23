jQuery.noConflict()(function(){

	jQuery("div.dokuwiki").append("<img id='bottomright' src='"+DOKU_TPL+"images/minime.png' />");
	jQuery("div.dokuwiki").append("<img id='topleft' src='"+DOKU_TPL+"images/peek.png' />");
		
	jQuery("footer").wrap("<div id='fakefoot' />");
	jQuery("#fakefoot").prepend("<div id='footerleft'></div>");
	jQuery("#fakefoot").append("<div id='footerright'></div>");
	
	jQuery("aside").wrap("<div id='fakeaside' />");

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
	
    jQuery(document).ready(function(){
        if (window.name != "slideded") {
            jQuery("#info").delay(3000).slideUp(300);
            window.name = "slideded";
        } else {
            jQuery("#info").hide();
        }
    });
});
