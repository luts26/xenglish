jQuery(document).ready(function($){

    $('#xstart').on('click',function(){
        $('.auth_form').show(500);
        $(this).hide(100);
    });


    $('.show_form').each(function(){

    	var el = $(this)
    		btn = $(el).find('.mclose_btn');

    	$(btn).on('click',function(){

	    	$(el).hide(500);
	    	$('#xstart').show(100);
	    });
    });

    $('#show_reg_form').on('click',function(){

    	$('.auth_form').hide();
    	$('.reg_form').show();
    });
    
});