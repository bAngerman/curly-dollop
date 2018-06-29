(function($) {

  // Body Transition
	$(window).on('load', function(){
		$('body').addClass('dom-ready');
	});

	$(document).on('click touch', '.menu-toggle', function(e) {
		$('.navi').toggleClass('on');
		$('.menu-toggle i').toggleClass('fa-times fa-bars');
	});

	$(document).on('change', '#faq', function(e) {

		e.preventDefault();

		var val = $('#faq').val();

		var xhr = new XMLHttpRequest();

		xhr.onreadystatechange = function() {
			if (xhr.readyState == 4 && xhr.status == 200)
			{
				var r = JSON.parse( xhr.responseText );
				if ( r ) {
					document.getElementById("faq-answer").innerHTML = r;
				}
			}
		}
		xhr.open('POST', ajaxscript.ajax_url, true );
		xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		var params = 'action=get_faq&faq=' + val;
		xhr.send( params );

	});

	$(document).on('click', 'a[href^="#"]', function(e) {
		e.preventDefault();
		// target element id
		var id = $(this).attr('href');
		
		if ( $(e.target).closest('a').hasClass('menu-toggle') ) {
			return;
		}

		// target element
		var $id = $(id);
		if ($id.selector === '#' ) {
			return;
		}
		if ($id.length === 0 ) {
			return;
		}		

		// top position relative to the document
		var tar = '#' + $( $id )[0].id;

		document.querySelector( tar ).scrollIntoView({ 
			behavior: 'smooth' 
		});
	});

}(Zepto));