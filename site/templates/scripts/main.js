$(function(){

	
	
	
	$('.body-tile').hide();
	
	$('.title-tile').on('click', function(){
		
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$(this).next('.body-tile').slideUp();
			$(this).children('.fa:first').removeClass('fa-chevron-up');
		$(this).children('.fa:first').addClass('fa-chevron-right');
			
		}
		else{
			
		$('.title-tile').removeClass('active');	
		$('.fa').removeClass('fa-chevron-up');
		$('.fa').addClass('fa-chevron-right');
		$(this).addClass('active');
		$('.body-tile').slideUp();
		$(this).next(' .body-tile' ).slideDown();
		$(this).children('.fa:first').removeClass('fa-chevron-right');
		$(this).children('.fa:first').addClass('fa-chevron-up');
	
		}
	
	});
	
	
	

});