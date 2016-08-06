$( window ).load(function() {
	if ($('#instafeed').length > 0) {
		instagramFeed();
	}
	homepageSlider();
	projectMasonry();
	basicMasonryLightbox();
	divEqualizer($('.project'))
// 	bodyHeight();
	if ($(window).width() > 990) {
		
	} else {
		
	}

})

$( document).ready(function() {

})

$( window ).resize(function() {
	if ($(window).width() > 990) {
		
	} else {
		
	}	
})

$(document).ajaxComplete( function() {
	
})


function squareMaker(selector) {
	var width = selector.width();
	selector.css('height', width);
	if ($(window).width() > 1150) {
		$('.contact.offset-cont .side-cont').css('height', width);
	}
}

function divEqualizer(divSelector) {
	var maxHeight = 0;
	divSelector.each(function(){
   		if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
	});
	divSelector.height(maxHeight);
}

function centerBlogImages() {
	$('img.aligncenter').parent().css('text-align','center')
}

function smoothScroll(element, padding) {
	$('html, body').animate({
        scrollTop: element.offset().top - padding
    }, 600);
}


function projectMasonry() {
	var $grid = $('.masonry-container').masonry({
		itemSelector: '.masonry-item',
		columnWidth: '.masonry-item'
	})
	$grid.imagesLoaded().progress( function() {
	  $grid.masonry('layout');
	});	
}

function basicMasonryLightbox() {
	$(".masonry-container .fancybox").fancybox({
		'padding': 0,
		'margin': 25,
		'width':'90%',
		'overlayShow': true,
		'showNavArrows': true,
		'titlePosition': 'inside',
        helpers : {
            title : {
                type: 'inside'
            },
            overlay: {
	            locked: 'true'
            }
		},
		beforeShow: function(){
		   this.title = $(this.element).next('.my-fancybox-title').html();
		   
		 }
	});
}

function instaMasonry() {
	var $grid = $('#instafeed').masonry({
		itemSelector: 'a',
		columnWidth: 'a'
	})
	$grid.imagesLoaded().progress( function() {
	  $grid.masonry('layout');
	});	
}

function instagramFeed() {
	 var feed = new Instafeed({
		accessToken: '1977305975.c4c18b3.5ee06ee026024887b20d1e4aa1f8b9e3',
        clientId: 'c4c18b3c20c04df7bd610504fe3d6797',
        get: 'user',
        userId: 1977305975,
        sortBy: 'most-recent',
        limit: 60,
        resolution: 'standard_resolution',
        template: '<a href="{{link}}" target="_blank"><img src="{{image}}" /><div class="caption">{{caption}}</div></a>',
        after: function() {
	        instaMasonry();
        }

    });
    feed.run();
}


function homepageSlider() {
	var height = $(window).height();
	var navHeight = $('header').height();
	var footerHeight = $('footer').height() + 65;
	var newHeight = height - navHeight - footerHeight;
	$('.slider li').css('height', newHeight);
	$('.slider').slick({
		infinite: true,
		dots: false,
		arrows:false,
		autoplay: true,
		fade: true,
		speed: 1000,
		pauseOnFocus: false,
		pauseOnHover: false
	})
}
















