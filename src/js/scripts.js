(function ($, root, undefined) {
	
	$(function () {
        
		'use strict';
        
        var controller;
        
        controller = new ScrollMagic.Controller();
        
        var scrollToOffset = 110;
        
        
        $(".js-scroll-to").bind("click", function(e){
            e.preventDefault();
            var tg = $(this).attr("href") ||  $(this).attr("data-target");
            console.log(tg);
            if(tg){
                $('html, body').animate({
                    scrollTop: $(tg).offset().top - scrollToOffset
                }, 1000);
            }
        });
        
        
        
	});
    
	
})(jQuery, this);
