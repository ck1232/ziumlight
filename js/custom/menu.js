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

var amountScrolled = 300;

$(window).scroll(function() {
    if ( $(window).scrollTop() > amountScrolled ) {
        $('#sf-back-to-top').fadeIn('slow');
    } else {
        $('#sf-back-to-top').fadeOut('slow');
    }
});

function backToTop() {
    $('html, body').animate({
        scrollTop: 0
    }, 'slow');
    return false;
};