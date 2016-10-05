// FORM FUNCTIONS


function showForm(el,width) {
	var popup_id = 1;
	
	el = $(el);

	if (width === undefined) {
		width = 650;
	}

	if ($('.lightbox').length) {
		popup_id = parseInt($('.lightbox').last().attr('id').substr(4), 10) + 1;
	}

	// Hide all the overlays
	$('.bg-overlay.active').removeClass('active');

	// remove any lightbox overlays 
	if ($('.bg-overlay.lb').length) {
		$('.bg-overlay.lb').remove();
	}
	$('body').append('<div class="bg-overlay lb active" data-id="lbid'+ popup_id + '""></div>');


	if (!$('.lightbox').length) {
		el.wrap('<div class="lightbox" id="lbid' + popup_id +'" />');
		$('#lbid'+ popup_id).width(width);
	} else {
		$('.lightbox').children('.hidden-form').unwrap();
		el.wrap('<div class="lightbox" id="lbid' + popup_id +'" />');
		$('#lbid'+ popup_id).width(width);
	}
}


// close forms and remove bg-overlay
var formWrapper;
function hideForm(el) {
	
	if (el.hasClass('close')) {
		formWrapper = el.parents('.lightbox').attr('id');
	} else {
		formWrapper = el.data('id');
	}

	// check that the form is present on the page if its not remove the bgoverlay
	if ($('#' + formWrapper).length > 0) {
		// remove the lightbox wrapped around this form and remove the bg with same data-id
		$('#' + formWrapper).addClass('remove');
		// wait until remove css animation has finished to clear values and show and default form
		$(".remove").on('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd',function() {
			// reset all form values empty and revert form to default.
			resetForm(formWrapper);

			setTimeout(function() {
				$('#' + formWrapper).children().unwrap();
				$('body').find('[data-id="'+ formWrapper +'"]').remove();
			}, 400);
		});
	} else {
		$('body').find('[data-id="'+ formWrapper +'"]').remove();
	}
}


// Reset form - empty values, default title, remove any success messages, remove any error message styles
function resetForm(id) {
	id = $('#' + id);
	title = id.find('.title-top').data('title');

	// remove error styles and added html
	id.find('.input-error').removeClass('input-error');
	id.find('.error-detail').remove();

	// show the form and reset the top-title
	id.find('.form-area').show();
	id.find('.title-top').text(title);

	// clear any success messages and hide div
	id.find('.success').empty().hide();

	// reset all input values to empty
	// :input Selects all input, textarea, select and button elements.
	id.find('.form-area form :input').val('');
}

/**
 * 
 * @param jQuery Selector for input -  field
 * @param Message to display - message
 * @param Error type - error
 *
 */
function formError(field,message,error) {

	if (!error) {
		error = false;
	}

	// create the selector
	field = $(field);

	// add error class to the input field
	field.addClass('validation-error');
	if (error == 'db') {
		field.prepend('<span class="error-detail">' + message + '</span>');
	} else {
		field.parent().append('<span class="error-detail">' + message + '</span>');
	}
}



var error = 0;

function submitForm(form, selector_ar)
{
	// remove all error styles and details
	$(form).find('.input-error').removeClass('input-error');
	$(form).find('.error-detail').remove();

	var form_id = $(form).parents('.lightbox').attr('id');

	var error = 0;
	var error_message;
	var fields = {};

	// Look through the selector ar and check for empty fields and create the correct error messages
	for (var key in selector_ar)
	{
		if (key == 'email') {
			error_message = 'Please Enter an E-mail Address';
		}
		if (key == 'fullname') {
			error_message = 'Please Enter Your First Name';
		}
		if (key == 'phone') {
			error_message = 'Please Enter a Contact Number';
		}
		if (key == 'message') {
			error_message = 'Please Input a Message';
		}

		// check if they're empty
		if ($(selector_ar[key]).val().length === 0) {
			form_error(selector_ar[key], error_message);
			error++;
		}

		fields[key] = {
			'value' : $(selector_ar[key]).val(),
			'selector' : selector_ar[key]
		};

	}

	if (error > 0) {
		return false;
	} else {

		// when launched into production this url needs to change
		$.ajax({
			url: "/benhumphries.co.uk/lib/ajax/contact.php",
			cache: false,
			type: "POST",
			data: fields,
			success: function(ajax) {

				ajax = JSON.parse(ajax);

				console.log(ajax);

				if (ajax.console != null) {console.log(ajax.console);}

				if (ajax.error != null) {
					/* ajax action returns an error, inform the user */
					// user input error
					for (var i = 0; i < ajax.error.length; i++) {
						formError(ajax.error[i].selector, ajax.error[i].message);
					}
					return false;
				}

				console.log(ajax.success);
				if (ajax.success != null)
				{
					console.log('success');
					/* ajax action returns success, inform the user */
					$('.form-area').hide();
					$('.success').show().append('<h2>'+ ajax.success.title +'</h2><p>'+ ajax.success.message +'</p>');

				}
			},
			error: function(e) {
				console.log(e.responseText);
			}
		});
	}
}

// document ready
 $(document).ready(function()
 {
	
	// form focus and blur show and hide the label
	$(document).on('blur', 'input', function(){
		if($(this).val().length !== 0) {
			$(this).siblings('label').css('opacity', '0');
		}
	});

	$(document).on('focus', 'input', function(){
		if($(this).val().length !== 0) {
			$(this).siblings('label').css('opacity', '1');
		}
	});


	// navbar icon show and hide on desktops depending on scroll position
	if ($(window).width() > 992)
	{
		$(window).scroll(function()
		{
			if ($(this).scrollTop() >= $('header').outerHeight() + 30)
			{
				$('#top-nav').hide();
				$('#nav-icon').removeClass('hide-on-large-only');
				$('nav').addClass('z-depth-2');
			}
			else
			{
				$('#top-nav').show();
				$('#nav-icon').addClass('hide-on-large-only');
				$('nav').removeClass('z-depth-2');
			}
		});
	}

});


