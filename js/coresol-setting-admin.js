(function($){

	/**
	 * Helper class for dealing with the admin
	 * settings page.
	 *
	 * @class AdminSettings
	 * @since 1.0
	 */
	AdminSettings = {

		/**
		 * Initializes the builder's admin settings page.
		 *
		 * @since 1.0
		 * @method init
		 */
		init: function()
		{
			this._bind();
			this._initNav();
			this._datePicker();
		},

		/**
		 * Binds events for the builder's admin settings page.
		 *
		 * @since 1.0
		 * @access private
		 * @method _bind
		 */
		_bind: function()
		{
			$('.coresol-settings-nav a').on('click', AdminSettings._navClicked);
		},

		
		/**
		 * Initializes the nav for the builder's admin settings page.
		 *
		 * @since 1.0
		 * @access private
		 * @method _initNav
		 */
		_initNav: function()
		{
			var links  = $('.coresol-settings-nav a'),
				hash   = window.location.hash,
				active = hash === '' ? [] : links.filter('[href~="'+ hash +'"]');

			$('a.coresol-active').removeClass('coresol-active');
			$('.coresol-settings-form').hide();

			if(hash === '' || active.length === 0) {
				active = links.eq(0);
			}

			active.addClass('coresol-active');
			$('#coresol-'+ active.attr('href').split('#').pop() +'-form').fadeIn();
		},

		/**
		 * Fires when a nav item is clicked.
		 *
		 * @since 1.0
		 * @access private
		 * @method _navClicked
		 */
		_navClicked: function()
		{
			if($(this).attr('href').indexOf('#') > -1) {
				$('a.coresol-active').removeClass('coresol-active');
				$('.coresol-settings-form').hide();
				$(this).addClass('coresol-active');
				$('#coresol-'+ $(this).attr('href').split('#').pop() +'-form').fadeIn();
			}
		},
		
		/**
		 * Fires when a datepicker is added.
		 *
		 * @since 1.0
		 * @access private
		 * @method _datePicker
		 */
		_datePicker: function()
		{
			$('.coresol-datepicker').datepicker({
				dateFormat : 'd/m/yy'
			});
		}
	};

	/* Initializes the builder's admin settings. */
	$(function(){
		AdminSettings.init();
	});

})(jQuery);
