(function($) {
$(function() {
	if ($('#views-exposed-form-tracks-page-1 .views-exposed-widget')) {
		if ('#views-exposed-form-tracks-page-1 .views-exposed-widget .views-operator') {
			$('#views-exposed-form-tracks-page-1 .views-exposed-widget .views-operator').parent().addClass('has-operator');
		}
	}

	if ($('.node-type-track #comments')) {
		//alert("Comments");
		//$('.node-type-track #comments').appendTo('#track-comments');
		$('.node-type-track #comments').appendTo('.track-map').hide();
		$('.track-switcher').click(function(e){
			e.preventDefault();
			$('.map, #comments').slideToggle();
			if ($('.track-switcher').text() == "View Comments") {
				$('.track-switcher').text('View Map');
			} else {
				$('.track-switcher').text("View Comments");
			}
	    });
	}
/* 
Jaymie's code below sets the width of the openlayer container to be the same as the content wrap div.  
It also sets the OL map itself to be a bit smaller to the same width of the OL controls.  This appears to 
be incorrect, as the controls overlay the map and don't need to be taken into account.

Way forward: 
1.  Comment out section below and introduce my bit instead. 
2.  Reintroduce tatics used below if/as needed.
3.  Try setting some of the children divs to 100% width or auto.
*/
 
/*
	if ($('.openlayers-container')) {
		var ContentWidth = $('#content-wrap').width();
		var OLControlsWidth = $('#OpenLayers_Control_MaximizeDiv_innerImage').width();
		$('.openlayers-container').css({ "width" : ContentWidth });
		$('.openlayers-map').css({ "width" : (ContentWidth - OLControlsWidth) });
	}
*/
});
/* 
My bit below which sets the width of the center content region to be 
the remainder of the window size after sidebar widths removed.  

The bit above messes with the same stuff... I was going to combine the two
except I couldn't discern if it was doing anything useful.

I have also now moved some js that used to be in the openlayers themeing file to here.  
It adjusts the map height. 
*/ 
function mapwidth() {
   $('#content-wrap').css({ "width" : $(window).width() - 390});
   $('#main-content-wrap').css({ "width" : $(window).width() - 180});
   $('#topBar').css({ "width" : $(window).width() - 390});
   $('#openlayers-container-openlayers-map-auto-id-0').css({ "height" : $(window).height() - $('#header-wrap').height() - $('#footer-wrap').height() - 70 });
   $('#openlayers-map-auto-id-0').css({ "height" : $(window).height() - $('#header-wrap').height() - $('#footer-wrap').height() - 70});
   $('#inner-content-wrap').css({ "height" : $(window).height() - $('#header-wrap').height() - $('#footer-wrap').height() });
   $('#sidebar-first').css({ "height" : $(window).height() - 170});
   $('#main-sidebar-wrap').css({ "height" : $(window).height()});   
}
$(document).ready(function() {
   $("#sidebar-first").niceScroll();
   $("#main-sidebar-wrap").niceScroll();
   $("#inner-content-wrap").niceScroll();
//   $("#block-views-photos-block_1").niceScroll();
 //  $(".view-dom-id-7882bd9f209f911626969cbab30b7467").niceScroll();
 //  $(".view-dom-id-d4f5a17a354621375c18152855941e43").niceScroll();
 //  $(".view-dom-id-8177d8272d30ab26f0bab6faf1de1031").niceScroll();
   mapwidth();
   $(window).bind("resize", mapwidth);
});

})(jq183)