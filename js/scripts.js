$(document).ready(function() {

    /**
     * this script is the click action for the .mobile-nav to slide out
     *
     * Trigger:
     * <a class="mobile-nav-button" href="#">
     *
     * This button is on the top right corner and is only visible on
     * resolutions that are 480px or lower. 
     */
    $('.mobile-nav-button').on('click', function(event){
        event.preventDefault();
        
        $(this).toggleClass('active');
        $('.mobile-nav').toggle('slide');

    }); // end function

    $('li.clickThrough').on('click', function(event) {

    	$(this).addClass('active');
    	$('li.clickThrough2, li.clickThrough3').removeClass('active');
    	console.log( this );
    	$('.currentSpecials').show();
    	$('.quickTips, .meinekeDifference').hide();
	}); // end function

	$('li.clickThrough2').on('click', function(event) {

    	$(this).addClass('active');
    	$('li.clickThrough, li.clickThrough3').removeClass('active');
    	console.log( this );
    	$('.quickTips').show();
    	$('.currentSpecials, .meinekeDifference').hide();
	}); // end function

	$('li.clickThrough3').on('click', function(event) {

    	$(this).addClass('active');
    	$('li.clickThrough, li.clickThrough2').removeClass('active');
    	console.log( this );
    	$('.meinekeDifference').show();
    	$('.quickTips, .currentSpecials').hide();
	}); // end function
    
});