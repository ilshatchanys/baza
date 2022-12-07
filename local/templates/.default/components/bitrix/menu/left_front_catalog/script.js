$(document).ready(function(){
	CheckTopMenuFullCatalogSubmenu();

	$(document).on('mouseenter', '.menu_top_block .has-child.v_hover', function () {
		var _this = $(this),
			menu = _this.find('> .dropdown');

		menu.velocity('stop');

		if(menu.css('opacity') != 0)
		{
			menu.css('opacity' , '1');
		}
		else
		{
			menu.velocity('transition.fadeIn', {
				duration: 300,
				delay: 400
			});
		}

		_this.one('mouseleave', function () {

			menu.velocity('stop').velocity('transition.fadeOut', {
				duration: 150,
				delay: 300
			});
		});
	});


		//hide children
		if( $('.catalog_block .menu li.m_line').length > 0 ) {
			$('.catalog_block .menu li.m_line').each(function(id,item){
				this.id = "d-item" + id;
				if (id > 6) {
					$(this).hide().addClass('was-removed-by-js');
				}
			});
		}

		if( $('.catalog_block .menu li.m_line').length > 7 ) {
			$('.catalog_block .menu.dropdown').append('<li id="switch_allCategories" class="full m_line v_bottom"><a><span class="name">Показать все категории</span></a></div>');
		}

		$('#switch_allCategories').click(function(){

			$('.was-removed-by-js').show('collapse');
			$(this).hide().remove();
		});

})