function handleStatusChanged() {
    $('#toggleElement').on('change', function () {
      toggleStatus();
    });
}

function toggleStatus() {
    if ($('#toggleElement-yes').is(':checked')) {
    	$('#elementsToOperateOn :input').removeAttr('disabled');
    }
	    else {
	        $('#elementsToOperateOn :input').attr('disabled', true);
	    }
	if ($('#toggleElement').is(':checked')) {
		$('#elementsToOperateOn :input').val('');
	} else {

	}
}
function handleStatusChangeds() {
    $('#toggleElements').on('change', function () {
      toggleStatused();
    });
}

function toggleStatused() {
    if ($('#toggleElements').is(':checked')) {
    	$('#elementsToOperateOns :input').attr('disabled', true);

    }
	    else {
	        $('#elementsToOperateOns :input').removeAttr('disabled');
	    }
	if ($('#toggleElements').is(':checked')) {
		$('#elementsToOperateOns :input').val('');
	} else {

	}
}
function toggleStatuseds() {
    if ($('#toggleElement-ser').is(':checked')) {
    	$('#elementsToOperateOnsed :input').attr('disabled', true);

    }
	    else {
	        $('#elementsToOperateOnsed :input').removeAttr('disabled');
	    }
	if ($('#toggleElements-ser').is(':checked')) {
		$('#elementsToOperateOnsed :input').val('');
	} else {

	}
}
$(document).on('click','.activity-type', function (){
	$('ul.sub-detail').toggleClass('show');
});
$(document).on('click','.addvendor_checkbox',function () {
	var newOnsiteVendor = $('.input-booking.vendor:last').clone();
	$('.addvendor_checkbox', newOnsiteVendor).prop('checked', false);
	$('.vendor_onsite').append(newOnsiteVendor);
});
$(document).on('click','.addstaff_checkbox',function () {
	var newOnsiteStaff = $('.input-booking.staff:last').clone();
	$('.addstaff_checkbox', newOnsiteStaff).prop('checked', false);
	$('.staff_onsite').append(newOnsiteStaff);
});
$(document).on('click','.addstaff_checkbox_unit', function() {
	var newOnsiteUnit = $('.unit:last').clone();
	$('.addstaff_checkbox_unit', newOnsiteUnit).prop('checked', false);
	$('.unit_list').append(newOnsiteUnit);
});
$(document).on('click','.icon-add',function (){
	var newTextCharacter = $('.input_text').find('input[type="text"]').val();
		newTextCharacters =  newTextCharacter + ', ';
	var text_add = newTextCharacters;
	$('.character textarea.form-control').append(text_add);
});

$(document).ready(function (){
	$('.menu-btn-nav').click(function (){
		$('.content-inner').toggleClass('content-push');
		$('.side-menu').toggleClass('visible');
	});
});
$(document).ready(function (){
	$('.filter-menu').click(function (){
		$('.filter .dropdown-menu').toggleClass('active');
	});
	$('.close').click(function (){
		$('.filter .dropdown-menu').removeClass('active');
	});
})
$(document).ready(function (){
	$('.type-search').on("keyup", function (){
		var value = $(this).val().toLowerCase();
		$('.mytable tr').filter(function (){
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
});
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
$(document).ready(function (){
	$('.dropdown-side-menu').click(function (){
		$('.dropdown-menu-son').toggleClass('show');
	});
	$('.dropdown-side-menu-son').click(function (){
		$('.dropdown-menu-son-active').toggleClass('show');
	});
});
$(document).ready(function (){
	if($('.dropdown-menu-son li').hasClass('active')) {
		$('.dropdown-menu-son').toggleClass('show');
	}
});
$(document).ready(function (){
	$('.form-group.search').click(function (){
		$('.side-menu').toggleClass('visible')
	});
});
$(document).ready(function (){
	$('.account-info').click(function(){
		$('.info-logout').toggleClass('show');
	});
});
$(document).ready(function (){
	$('.btn_signup').click(function (){
		$('.dropdown-menu-signup').toggleClass('show');
	})
});
$(document).ready(function() {
	$('input#new-tag-post_tag').keypress(function(event){
        var newTextCharacter = $('.input_text').find('input[type="text"]').val();
            newTextCharacters = newTextCharacter + ',' ;
        var text_add = newTextCharacters;
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            $('.character textarea.form-control').append(text_add);
            $(this).val("");
            return false;
        }
        event.stopPropagation();
    });
$(document).ready(function() {
	$(window).keypress(function(e) {
		var keycode = (e.keyCode ? e.keyCode : e.which);
		if(keycode == '13'){
            return false;
        }
	});
});
  $('.button_linked .list_content_tester input[type="radio"]').click(function () {
    // body...
    if($(this).is(':checked')) {
      $('.linked_sub').hide();
    }
  })
  $('.linked_sub input[type="radio"]').click(function () {
    // body...
    if($(this).is(':checked')) {
      $('.resource_detail_list_category').hide();
    }
  })
});


