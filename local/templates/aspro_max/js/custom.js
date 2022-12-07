/*
You can use this file with your scripts.
It will not be overwritten when you upgrade solution.
*/
$(function() {

	if( $('#purshace_price_out').length )
	{
		var html = $('#purshace_price_out').html();
		$('#purshace_price_out').remove()
		$('#purshace_price_in').html(html);
	}

});