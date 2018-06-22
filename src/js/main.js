(function($) {

  // Body Transition
	$(window).load(function(){
		$('body').addClass('dom-ready');
	});

	$(document).on('click touch', '.menu-toggle', function(e) {
		$('.navi').toggleClass('on');
		$('.menu-toggle i').toggleClass('fa-times fa-bars');
	});

	

	$(document).on('change', '#faq', function(e) {

		e.preventDefault();

		var val = $('#faq').val();

		$.ajax({
			method: "POST",
			url: ajaxscript.ajax_url,
			data: {
				action: 'get_faq',
				faq: val
			},
			success: function(r) {
				r = JSON.parse(r);
				$('#faq-answer').empty().html(r);
			}
		})
	});

}(jQuery));