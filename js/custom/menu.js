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