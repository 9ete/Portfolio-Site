//HIDE JSSOR SLIDER UNTIL FULLY LOADED
window.onload = function() {
   //document.getElementById("slider1_container").style.visibility = "visible"; //Use visibility to keep a blank placeholder
   document.getElementById("slider1_container").style.display = "block";
};

$('#soundcloud-player-placeholderimage').click(function(){
	var video = '<iframe width="'+ $(this).attr('width') +'" height="'+ $(this).attr('height') +'" border="2" src="'+ $(this).attr('data-video') +'"></iframe>';
	$(this).replaceWith(video);
});