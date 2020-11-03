$(document).ready(function () {

    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });


	//Page scrolling feature
	$('.nav a').bind('click', function(event) {
		var link = $(this);
		$('html,body').stop().animate({
			scrollTop: $(link.attr('href')).offset().top - 70
		},1000);
		event.preventDefault();
	});



	function ScrollPostion() {
		var t, l, w, h;
		if(document.documentElement && document.documentElement.scrollTop) {
			t = document.documentElement.scrollTop;
			l = document.documentElement.scrollLeft;
			w = document.documentElement.scrollWidth;
			h = document.documentElement.scrollHeight;
		}else if (document.body){
			t = document.body.scrollTop;
			l = document.body.scrollLeft;
			w = document.body.scrollWidth;
			h = document.body.scrollHeight;
		}
		return{
			top: t,
			left: l,
			width: w,
			height: h
		}
	}

$('#support .bg').bind('mouseover', function (event) {
	$(this).addClass('bgred animated');
	$(this).find('.sup-content').hide();
	$(this).find('.sup-content-desc').show();
});
$('#support .bg').bind('mouseout', function (event) {
	$(this).removeClass('bgred');
	$(this).find('.sup-content').show();
	$(this).find('.sup-content-desc').hide();
});

});