// Scripts.js
/**
 * Function: debug
 * @return: Wraps console functions so that they can be used without worrying about breaking browsers
 */
var DEBUG_MODE = true;
function log() {
    if( DEBUG_MODE && window.console ) {
        console.info( arguments );
    }
}// End of debug()

var UI = {
	menuPrimary: '#nav-primary',
	menuActiveClass: 'open',
	toggleMenu: function ( element ){
		var button = $(element);

		if ( button.hasClass( this.menuActiveClass ) ) {
			button.removeClass( this.menuActiveClass );
			$(this.menuPrimary).removeClass( this.menuActiveClass );
			$('body').removeClass('menu-' + this.menuActiveClass );
		}
		else {
			button.addClass( this.menuActiveClass );
			$(this.menuPrimary).addClass( this.menuActiveClass );
			$('body').addClass('menu-' + this.menuActiveClass );
		}

		button.blur();
	},
	dismissMenu: function(){
		$('.menu-toggle').removeClass( this.menuActiveClass );
		$(this.menuPrimary).removeClass( this.menuActiveClass );
		$('body').removeClass('menu-' + this.menuActiveClass );
	}
}; // End UI Prototype

/**
 * Document Ready
 */
$(document).ready(function ($) {
    // Populate with document ready scripts
});// End $(document).ready()