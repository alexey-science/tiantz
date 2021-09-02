$(document).ready(function () {
	document.createElement('header');
	document.createElement('section');
	document.createElement('footer');
	document.createElement('nav');

	$('input, textarea').placeholder();
	$('.catalog-item .title, .news-item .text, .news-item .text2, .news-item .album, .news-item .album2').dotdotdot();

	//	дефолтные фенси	
	$.extend($.fancybox.defaults, {
		padding: 0,
		maxWidth: 5555555, //'90%'
		maxHeight: 555555,
		openEffect: 'elastic',
		closeEffect: 'elastic',
		fitToView: false,
		fixed: false,
		autoResize: false,
		autoCenter: false,
		helpers: {
			overlay: {
				css: {
					'background': 'rgba(0,0,0,0.8)'
				}
			},
			title: {
				type: 'inside'
			}
		}
	});
	$('.fnc-photo').fancybox({
		maxWidth: '90%', //'90%'
		maxHeight: '90%',
		fitToView: true,
		autoCenter: true,
		beforeShow: function () {
			$('body').addClass('over');
		},
		afterClose: function () {
			$('body').removeClass('over');
		},
		afterShow: function () {
			$('.fancybox-wrap').swipe({
				swipe: function (event, direction) {
					if (direction === 'left' || direction === 'up') {
						$.fancybox.prev(direction);
					} else {
						$.fancybox.next(direction);
					}
				}
			});
		}
	});
	
	$('.news-item:not(:has(img))').addClass('roll');

	// phonemask	
	if ($('.phoneinput').length > 0) {
		$('.phoneinput').inputmask("mask", {
			"mask": "+7-(999)-999-99-99"
		});
	}

	$('.language').click(function () {
		var drop = $(this).find('.hidden');
		if (!$(this).hasClass('opened')) {
			drop.slideDown(150);
			$(this).addClass('opened');
		}
		var item = $(this);
		var yourClick = false;
		$(document).bind('click.myEvent', function (e) {
			if (!yourClick && $(e.target).closest(item).length == 0) {
				drop.slideUp(150);
				item.removeClass('opened');
				$(document).unbind('click.myEvent');
				return false;
			}
			yourClick = false;


		});

	});

	$('.nav>li>ul').each(function () {
		$(this).parent().addClass('hasUl');
	});
	// menu marker
	markerNav();

	function markerNav() {
		if ($('.nav>li>a.active').length > 0) {
			var item = $('.nav>li>a.active');
			var linkPos = item.parent().position().left;
			var linkPos2 = item.position().left;
			var myPos = linkPos + linkPos2;
			var myWidth = item.outerWidth(true);
			$('.marker').css('left', myPos);
			$('.marker').css('width', myWidth);
		} else {
			$('.marker').css('width', 0);
		}
	}


	$('.nav>li>a').mouseenter(function () {
		$(this).stop(true, true);
		var linkPos = $(this).parent().position().left;
		var linkPos2 = $(this).position().left;
		var myPos = linkPos + linkPos2;
		var myWidth = $(this).outerWidth(true);
		$('.marker').css('left', myPos);
		$('.marker').css('width', myWidth);
	});

	$('.nav').mouseleave(function () {
		markerNav();
	});


	// slider main
	$(".slider ul").owlCarousel({
		items: 1,
		singleItem: true,
		autoPlay: false,
		slideSpeed: 300,
		paginationSpeed: 300,
		navigation: false,
		pagination: true,
		mouseDrag: true,
		touchDrag: true,

	});

	var mainSlider = $(".slider ul").data('owlCarousel');

	$('.prev').click(function () {
		mainSlider.prev();
	});

	$('.next').click(function () {
		mainSlider.next();
	});

	// slider card
	$(".tovar-slider ul").owlCarousel({
		items: 1,
		singleItem: true,
		autoPlay: false,
		slideSpeed: 300,
		paginationSpeed: 300,
		navigation: false,
		pagination: true,
		mouseDrag: true,
		touchDrag: true,

	});

	var mainSlider2 = $(".tovar-slider ul").data('owlCarousel');

	$('.prev2').click(function () {
		mainSlider2.prev();
	});

	$('.next2').click(function () {
		mainSlider2.next();
	});

	$('.tabs-head a').click(function () {
		var ind = $(this).index();
		if ($(this).hasClass('active')) {

		} else {
			$('.tabs-head a').removeClass('active');
			$(this).addClass('active');
			$('.tab').removeClass('active');
			$('.tab').eq(ind).addClass('active');
		}
	});

	// sidebar
	$('.side-link').click(function () {
		var item = $('.sidebar');
		var yourClick = false;
		if (!item.hasClass('active')) {
			$('.sidebar').addClass('active');
			$('body').addClass('shift');
			$(".main").animate({
				left: '265px'
			}, 150);
		} else {
			$('.sidebar').removeClass('active');
			$('body').removeClass('shift');
			$(".main").animate({
				left: '0px'
			}, 150);
			$(document).unbind('click.myEvent');
		}
		$(document).bind('click.myEvent', function (e) {
			if (!yourClick && $(e.target).closest(item).length == 0) {
				$('.sidebar').removeClass('active');
				$('body').removeClass('shift');
				$(".main").animate({
					left: '0px'
				}, 150);
				$('.s-back').css('left', '-265px');
				$('.s-vision').removeClass('s-vision');
				$('.s-open').removeClass('third-open').removeClass('s-open');
				$(document).unbind('click.myEvent');
				return false;
			}
			yourClick = false;

		});
		return false;
	});

	$('.sidebar li').each(function () {
		if ($(this).find('ul').length > 0) {
			$(this).find('>a').prepend('<div class="s-ar icon icon-chevron-left"></div>');
			$(this).addClass('s-li');
		}
	});

	$('.sidebar>ul>li.s-li>a').click(function () {
		var item = $(this).closest('ul');
		var title = $(this).closest('li').find('>a').html();
		$(this).closest('li').addClass('s-vision');
		item.addClass('s-open');
		$('.s-back').css('left', 0);
		$('.s-back').html(title);
		$('.s-back').attr('data-last-title', title);
		return false;
	});

	$('.s-back').click(function () {
		var sitem = $(this).parent('.sidebar').find('.s-open');
		var thitem = $(this).parent('.sidebar').find('.third-open');
		if (thitem.length > 0) {
			thitem.removeClass('third-open');
			$('.s-back').html($('.s-back').attr('data-last-title'));
		} else {
			sitem.removeClass('s-open');
			$('.s-back').css('left', '-265px');
			$('.s-vision').removeClass('s-vision');
		}
	});

	$('.sidebar>ul>li>ul>li.s-li>a').click(function () {
		$('.s-open').addClass('third-open');
		var title = $(this).closest('li').find('>a').html();
		$('.s-back').html(title);
		return false;
	});

	// end sidebar

	$('.tlink').click(function () {
		if ($(window).width() < 1051) {
			if ($('.lside').hasClass('closed')) {
				$('.lside li').slideDown(150);
				$('.lside').removeClass('closed');
			} else {
				$('.lside').addClass('closed');
				$('.lside li').slideUp(150);

			}
		}
	});
	if($('.lside li:visible').length == 0){
		$('.lside').addClass('closed');
	}
    
     var idv = $('.youtube-video').attr('data-url');
	 $('.youtube-video').prettyEmbed({
        videoID: idv, //обязательно
        useFitVids: true,
        playerControls: false,
        playerInfo: false,
        loop:true,
		previewSize: 'default',   
        showRelated:false
    });
	
	sameHeight();
	
});
$(window).resize(function () {
	sameHeight();
	if ($(window).width() > 1050 - 15) {
		$('.lside li').slideDown(150);
		if ($('.lside').hasClass('closed')) {
			$('.lside').removeClass('closed');
		}

	}
});

function sameHeight() {
		var height = 0;
		$('.news-item').each(function () {
			$(this).removeAttr('style');
			if ($(this).height() > height) {
				height = $(this).height();
			}
		});
		$('.news-item').height(height);
	}