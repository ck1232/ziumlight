function myFunction() {
	$('#mobileMenu').toggleClass("hidden");
	$('#mobileMenu').toggleClass("responsive");
	if($('#menuIcon').hasClass("fa-bars")){
		$('#menuIcon').removeClass("fa-bars");
		$('#menuIcon').addClass("fa-times");
	}else if($('#menuIcon').hasClass("fa-times")){
		$('#menuIcon').addClass("fa-bars");
		$('#menuIcon').removeClass("fa-times");
	}
}

var amountScrolled = 180;

$(window).scroll(function() {
    if ( $(window).scrollTop() > amountScrolled ) {
        $('#sf-back-to-top').fadeIn('slow');
        $('.page-header').css('top','-20px');
    } else {
        $('#sf-back-to-top').fadeOut('slow');
        $('.page-header').css('top','0px');
    }
});

function backToTop() {
    $('html, body').animate({
        scrollTop: 0
    }, 'slow');
    return false;
};