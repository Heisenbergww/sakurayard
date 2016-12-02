/**
 * Theme IE8 specific scripts file.
 */
( function() {

	// Enables TAB key navigation support for dropdown menus.
	function navToggle( navId ) {
		var container, menu, links, subMenus;
		container = document.getElementById( navId );
		if (!container) {
			return;
		}

		menu = container.getElementsByTagName('ul')[0];
		if ( ! hasClass( menu, 'nav-menu' ) ) {
			menu.className += ' nav-menu';
		}

		// Hide menu toggle button if menu is empty and return early.
		if ('undefined' === typeof menu) {
			return;
		}

		menu.setAttribute('aria-expanded', 'false');

		// Get all the link elements within the menu.
		links = menu.getElementsByTagName('a');
		subMenus = menu.getElementsByTagName('ul');

		for (var i = 0, len = subMenus.length; i < len; i++) {
			// Set menu items with submenus to aria-haspopup="true".
			subMenus[i].parentNode.setAttribute('aria-haspopup', 'true');
		}

		// Each time a menu link is focused or blurred, toggle focus.
		for (i = 0, len = links.length; i < len; i++) {
			links[i].attachEvent('onfocus', toggleFocus, true);
			links[i].attachEvent('onblur', toggleFocus, true);
		}

		// Sets or removes .focus class on an element.
		function toggleFocus() {
			var self = window.event ? window.event.srcElement : event.target;

			// Move up through the ancestors of the current link until we hit .nav-menu.
			while ( ! hasClass( self, 'nav-menu' ) ) {

				// On li elements toggle the class .focus.
				if ('li' === self.tagName.toLowerCase()) {
					if (hasClass( self, 'focus' )) {
						self.className = self.className.replace(' focus', '');
					} else {
						self.className += ' focus';
					}
				}
				self = self.parentElement;
			}
		}

		function hasClass( elem, className ) {
			return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
		}
	}
	navToggle( 'main-navigation' );
	navToggle( 'header-menu' );

	// Helps with accessibility for keyboard only users.
	( function () {
		var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
			is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
			is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;
		if ( ( is_webkit || is_opera || is_ie ) && document.getElementById && window.attachEvent ) {
			window.attachEvent( 'onhashchange', function() {
				var id = location.hash.substring( 1 ),
					element;
				if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
					return;
				}
				element = document.getElementById( id );
				if ( element ) {
					if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
						element.tabIndex = -1;
					}
					element.focus();
				}
			}, false );
		}
	} ) ();
} ) ();
