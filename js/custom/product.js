(function(){
	/*$("select").imagepicker({
        hide_select : true,
        show_label  : false
      });
	*/
	  $('.spinner .btn:first-of-type').on('click', function() {
		if($('.spinner input').val() < 20){
			$('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
		}
	  });
	  $('.spinner .btn:last-of-type').on('click', function() {
		  if($('.spinner input').val() > 1){
			  $('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
		  }
	  });
	  
	  $('select').select2({
		  selectOnClose: true/*,
		  dropdownCssClass : 'no-search'*/
	  });
			  
})();