(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
        
        var $content = $('#jsonContent');
        var data = {
            rss_url: 'https://medium.com/feed/@appconsulenze'
        };
        $.get('https://api.rss2json.com/v1/api.json', data, function (response) {
            if (response.status == 'ok') {
                var output = '';
                $.each(response.items, function (k, item) {
                    output += '<div class="swiper-slide">';
                    output += '<div class="medium-blog-post"><header class="medium-blog-img">';
                    var formattedDate = new Date(item.pubDate);
                    var day = formattedDate.getDate();
                    var m_names = new Array("Jan", "Feb", "Mar", 
                    "Apr", "May", "Jun", "Jul", "Aug", "Sept", 
                    "Oct", "Nov", "Dec");
                    var month = formattedDate.getMonth();
                    var monthName = m_names[month];
                    console.log(monthName);
                    var tagIndex = item.description.indexOf('<img'); // Find where the img tag starts
                    var srcIndex = item.description.substring(tagIndex).indexOf('src=') + tagIndex; // Find where the src attribute starts
                    var srcStart = srcIndex + 5; // Find where the actual image URL starts; 5 for the length of 'src="'
                    var srcEnd = item.description.substring(srcStart).indexOf('"') + srcStart; // Find where the URL ends
                    var src = item.description.substring(srcStart, srcEnd); // Extract just the URL
                    output += '<img class="img-responsive" src="' + src + '" width="360px" height="240px"></header>';
                    output += '<div class="medium-blog-content"><div class="post-meta pb-3"><span class="medium-date">' + day + ' ' + monthName + '</span></div><h4><a class="medium-title" rel="canonical" target="_blank" href="'+ item.link + '">' + item.title + '</a></h4>';
                    output += '<div class="medium-cta-container"><a class="medium-cta" rel="canonical" target="_blank" href="'+ item.link + '">Leggi</a></div>';
                    var yourString = item.description.replace(/<img[^>]*>/g,""); //replace with your string.
                    var maxLength = 160 // maximum number of characters to extract
                    //trim the string to the maximum length
                    var trimmedString = yourString.substr(0, maxLength);
                    output += '</div></div></div>';
                    return k < 2;
                });
                $content.html(output);
            }
        });
        
        var mediumSwiper = new Swiper('.fb-medium-slider', {
            effect: 'slide',
            loop: false,
            observer: true,
            slidesPerView: 3,
            observeParents: true,
            spaceBetween:20,
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true
            },
            breakpoints: {
                769: {
                  slidesPerView: 1,
                  spaceBetween: 10
                }
            }            
        })
        
		
	});
	
})(jQuery, this);