const showOutOfProductionBlock = function () {
	const $jsBlock = document.querySelector("#js-item-analog");
	const $jsBlockDesktop = document.querySelector(".js-item-analog");
	const $jsBlockMobile = document.querySelector(".js-item-analog-mobile");

	if (!$jsBlock && (!$jsBlockDesktop || !$jsBlockMobile)) return;

	let params = $jsBlock.dataset.params;
	
	if (params) {
		try {
			const objUrl = parseUrlQuery();
			let add_url = '';
			params = JSON.parse(params);

			if ("clear_cache" in objUrl) {
				if (objUrl.clear_cache === "Y") 
					add_url += "?clear_cache=Y";
			}
			
			$.post(
				arAsproOptions["SITE_DIR"] + "ajax/out_of_production.php" + add_url,
				params,
				function (result) {					
					$jsBlockDesktop.innerHTML = result;
					if ($jsBlockMobile) {
						$jsBlockMobile.innerHTML = result;
					}
					setStatusButton();
					if (typeof $.fn.velocity !== 'undefined' && $jsBlockDesktop.querySelector(".catalog-item-analog")) {
						$($jsBlockDesktop).velocity(
							{ 
								height: $jsBlockDesktop.querySelector(".catalog-item-analog").getBoundingClientRect().height
							},
							{
								duration: 800,
								delay: 800,
								complete: function () {
									$jsBlockDesktop.classList.add('active')
									$jsBlockDesktop.removeAttribute('style')
								},
							}
						);

						if ($jsBlockMobile) {
							$($jsBlockMobile).velocity(
								{ 
									height: $jsBlockMobile.querySelector(".catalog-item-analog").getBoundingClientRect().height
								},
								{
									duration: 800,
									delay: 800,
									complete: function () {
										$jsBlockMobile.classList.add('active')
										$jsBlockMobile.removeAttribute('style')
									},
								}
							);
						}
					} else {
						$($jsBlockDesktop).slideUp();

						if ($jsBlockMobile) {
							$($jsBlockMobile).slideUp();
						}
					}
				}
			);
		} catch (e) {}
	}
};

$(document).ready(function() {
  showOutOfProductionBlock();
});