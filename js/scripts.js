$(document).ready(function() {

    $('li.clickThrough').on('click', function(event) {

    	$(this).addClass('active');
    	$('li.clickThrough2, li.clickThrough3').removeClass('active');
    	console.log( this );
    	$('.currentSpecials').show();
    	$('.quickTips, .meinekeDifference').hide();
	});
	$('li.clickThrough2').on('click', function(event) {

    	$(this).addClass('active');
    	$('li.clickThrough, li.clickThrough3').removeClass('active');
    	console.log( this );
    	$('.quickTips').show();
    	$('.currentSpecials, .meinekeDifference').hide();
	});
	$('li.clickThrough3').on('click', function(event) {

    	$(this).addClass('active');
    	$('li.clickThrough, li.clickThrough2').removeClass('active');
    	console.log( this );
    	$('.meinekeDifference').show();
    	$('.quickTips, .currentSpecials').hide();
	});
});