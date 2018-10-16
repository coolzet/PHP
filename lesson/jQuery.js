
jQuery('body').mouseenter(function(){
			
	jQuery('.text').addClass("text_hover");
					 
});

function slowScroll(id, id1, id2, id3, id4, id5) {
				
	jQuery(id1).show(1000, function(){
						
		jQuery(id2).hide(500);
		jQuery(id3).hide(500);
		jQuery(id4).hide(500);
		jQuery(id5).hide(500);
						
	});	
     			
    $('html, body').animate({

        scrollTop:2 + $(id).offset().top }, 500);

};

function hideSomething( id1, id2, id3, id4, id5) {
					
	jQuery(id1).show(1000, function(){
						
	jQuery(id2).hide(500);
	jQuery(id3).hide(500);
	jQuery(id4).hide(500);
	jQuery(id5).hide(500);
						
	});
 };