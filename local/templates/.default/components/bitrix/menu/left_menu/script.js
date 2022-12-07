$(document).ready(function(){

		//hide children
		if( $('.left_menu.dropdown .v_bottom.item').length > 0 ) {
			$('.left_menu.dropdown .v_bottom.item').each(function(id,item){
				this.id = "d-item" + id;
				if (id > 6) {
					$(this).hide().addClass('was-removed-by-js');
				}
			});
		}

		if( $('.left_menu.dropdown .v_bottom.item').length > 7 ) {
			$('.left_menu.dropdown').append('<li id="switch_allCategories" class="v_bottom item    item "><a><span class="name">Показать все категории</span></a></div>');
		}

		$('#switch_allCategories').click(function(){

			$('.was-removed-by-js').show('collapse');
			$(this).hide().remove();
		});

})