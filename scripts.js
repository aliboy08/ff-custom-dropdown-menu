if ($('.burger-menu-trigger').length) {
	$('body').on('click', '.burger-menu-trigger', function () {
		var button = $(this);
		var menu = $(this).next('.menu-container');
		button.toggleClass('active');
		menu.toggleClass('active');
	});

	$('body').click(function (e) {
		if ($(e.target).closest('#ff-custom-dropdown-menu').length == 0) {
			custom_dropdown_menu_close();
		}
	})

	function custom_dropdown_menu_close() {
		$('#ff-custom-dropdown-menu .burger-menu-trigger').removeClass('active');
		$('#ff-custom-dropdown-menu .menu-container').removeClass('active');
	}
}
