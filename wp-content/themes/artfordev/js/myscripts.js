$( document ).ready(function() {
    ResizingMenu();
	if($(window).height() < 1200 && $(window).width() > 1024 && $(window).width() < 1440){
		$('.video-wrap').css('height', 'initial');
	}
	window.onresize = function() {
	    if($(window).height() < 1200 && $(window).width() > 1024 && $(window).width() < 1440){
			$('.video-wrap').css('height', 'initial');
		}
	   ResizingMenu();
	}
	function ResizingMenu(){
	    if($(window).width() < 767){
    		$('.menu-osnovne-menyu-container').css('height', 'calc(100vh - ' + $('.site-header').height() + 'px)');
    	}
    	else{
    	    $('.menu-osnovne-menyu-container').css('height', 'inherit');
    	    $('.menu-osnovne-menyu-container').css('display', '');
    	}
	}
	$('.burger-btn').on('click', function () {
		togglingMenu();
	});
    $('#primary-menu .menu-item').on('click', function () {
		togglingMenu();
	});
    function togglingMenu(){
    	$('.menu-osnovne-menyu-container').slideToggle();
		$('body').toggleClass('burger-active');
    }
	if($('body').hasClass('home')){
		var videoEl = document.getElementsByTagName('video')[0],
        playBtn = document.getElementById('playBtn');
        
        playBtn.addEventListener('click', function () {
        	$(playBtn).toggleClass('paused');
            if (videoEl.paused) {
                videoEl.play();
            } else {
                videoEl.pause();
            }
        }, false);
	};
	function footorGoBottom() {
	    var correctTop = $(window).innerHeight() - $('footer').prev().outerHeight(true) - $('footer').prev().offset().top - $('footer').outerHeight(true);
	    if (correctTop > 0) {
	        $('footer').css({
	            top: correctTop
	        });
	    }
	};
	footorGoBottom();
	$(window).on('resize', footorGoBottom);
    
        
	$('li.img-svg a img').each(function(){
	  var $img = $(this);
	  var imgClass = $img.attr('class');
	  var imgURL = $img.attr('src');
	  $.get(imgURL, function(data) {
	    var $svg = $(data).find('svg');
	    if(typeof imgClass !== 'undefined') {
	      $svg = $svg.attr('class', imgClass+' replaced-svg');
	    }
	    $svg = $svg.removeAttr('xmlns:a');
	    if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
	      $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
	    }
	    $img.replaceWith($svg);
	    
	  }, 'xml');
	});
});

