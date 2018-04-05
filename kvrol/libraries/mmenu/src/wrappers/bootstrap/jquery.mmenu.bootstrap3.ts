/*	
 * jQuery mmenu Bootstrap 3 wrapper
 * mmenu.frebsite.nl
 *
 * Copyright (c) Fred Heusschen
 */

(function( $ ) {

	const _PLUGIN_ = 'mmenu';
	const _WRAPPR_ = 'bootstrap3';


	$[ _PLUGIN_ ].wrappers[ _WRAPPR_ ] = function()
	{

		//	Create the menu
		if ( this.$menu.hasClass( 'navbar-collapse' ) )
		{

			//	Set some config
			this.conf.classNames.selected = 'active';
			this.conf.classNames.divider  = 'divider';
			this.conf.clone = true;

			//	After initMenu, filter and refactor HTML for tabs, pills and navbars
			this.opts.initMenu = function( $menu )
			{
				var _type: string 	= '',
					types: string[]	= [ 'nav-tabs', 'nav-pills', 'navbar-nav' ];

				for ( var t = 0; t < types.length; t++ )
				{
					if ( $menu.find( '.' + types[ t ] ).length )
					{
						_type = types[ t ];
						break;
					}
				}

				if ( _type.length )
				{
					init.menu.call( this );
					init.dropdown.call( this );
					init[ _type.split( 'nav-' ).join( '' ).split( '-nav' ).join( '' ) ].call( this );
				}
			};
		}
	};



	var init = {
		menu: function()
		{
			this.$menu
				.children()
				.removeClass( 'nav' )
				.find( '.sr-only' ).remove().end()
				.find( '.divider:empty' ).remove();

			var attrs = [ 'role', 'aria-haspopup', 'aria-expanded' ];
			for ( var a = 0; a < attrs.length; a++ )
			{
				this.$menu.find( '[' + attrs[ a ] + ']' ).removeAttr( attrs[ a ] );
			}
		},
		dropdown: function()
		{
			var $dropdown = this.$menu.find( '.dropdown' );

			$dropdown
				.removeClass( 'dropdown' );

			$dropdown
				.children( '.dropdown-toggle' )
				.find( '.caret' ).remove().end()
				.each(
					function()
					{
						$(this).replaceWith( '<span>' + $(this).html() + '</span>' );
					}
				);
			
			$dropdown
				.children( '.dropdown-menu' )
				.removeClass( 'dropdown-menu' );
		},
		tabs: function()
		{
			this.$menu
				.children()
				.removeClass( 'nav-tabs' );
		},
		pills: function()
		{
			this.$menu
				.children()
				.removeClass( 'nav-pills' );
		},
		navbar: function()
		{
			var that = this;

			this.$menu
				.removeClass( 'collapse navbar-collapse' )
				.wrapInner( '<div />' )
				.children()
				.children()
				.removeClass( 'navbar-left navbar-right navbar-nav navbar-text navbar-btn' );

			var $form = this.$menu.find( '.navbar-form' );
			this.conf.searchform = {
				form 	: {
					action 	: $form.attr( 'action' ),
					method 	: $form.attr( 'method' )
				},
				input 	: {
					name 	: $form.find( 'input' ).attr( 'name' )
				},
				submit 	: true
			};
			$form.remove();

			(this.$orig || this.$menu)
				.closest( '.navbar' )
				.find( '.navbar-header' )
				.find( '.navbar-toggle' )
				.off( 'click' )
				.on( 'click', function( e ) {
					that.open();

					e.stopImmediatePropagation();
					e.preventDefault();
				});
		}
	};
	

})( jQuery );