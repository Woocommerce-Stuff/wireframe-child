/* global jQuery, wireframe_child */
/* jshint devel:true */

/**!
 * theme.js script file for themes built with Wireframe Suite for WordPress.
 *
 * These are theme-specific scripts to be used with Wireframe.
 *
 * jQuery 1.12.4
 *
 * @package   Wireframe Child
 * @author    MixaTheme, Tada Burke
 * @version   1.0.0 Wireframe Child
 * @copyright 2016 MixaTheme
 * @license   GPL-3.0+
 * @see       https://mixatheme.com
 * @see       https://github.com/mixatheme/wireframe-child
 *
 * This software is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this software. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * DOM ready.
 *
 * These scripts execute when the DOM is ready.
 *
 * @since 1.0.0 Wireframe Child
 * @see   http://stackoverflow.com/a/32621412
 */
jQuery( function( $ ) {
	'use strict';

	/**
	 * BS3: Primary.
	 *
	 * @since 1.0.0 Wireframe Child
	 * @type  object BS3_Primary
	 * @see   jQuery addClass()
	 * @see   http://v4-alpha.getbootstrap.com/components/buttons/
	 */
	var BS3_Primary = function () {};

	/**
	 * BS3: Secondary.
	 *
	 * @since 1.0.0 Wireframe Child
	 * @type  object BS3_Secondary
	 * @see   jQuery addClass()
	 */
	var BS3_Secondary = function () {
		$( '.widget_meta li:contains("Register")' ).addClass( 'meta-site-admin' );
		$( '.widget_meta li:contains("Site Admin")' ).addClass( 'meta-site-admin' );
		$( '.widget_meta li:contains("Log in")' ).addClass( 'meta-log-in' );
		$( '.widget_meta li:contains("Log out")' ).addClass( 'meta-log-out' );
		$( '.widget_meta li:contains("Entries RSS")' ).addClass( 'meta-entries-rss' );
		$( '.widget_meta li:contains("Comments RSS")' ).addClass( 'meta-comments-rss' );
		$( '.widget_meta li:contains("WordPress.org")' ).addClass( 'meta-wordpress' );
	};

	/**
	 * BS3: Images.
	 *
	 * @since 1.0.0 Wireframe Child
	 * @type  object BS3_Images
	 * @see   jQuery removeAttr()
	 */
	var BS3_Images = function () {};

	/**
	 * BS3: Forms.
	 *
	 * @since 1.0.0 Wireframe Child
	 * @type  object BS3_Forms
	 * @see   jQuery addClass()
	 * @see   http://v4-alpha.getbootstrap.com/components/forms/
	 */
	var BS3_Forms = function () {};

	/**
	 * BS3: Tables.
	 *
	 * @since 1.0.0 Wireframe Child
	 * @type  object BS3_Tables
	 * @see   jQuery addClass()
	 */
	var BS3_Tables = function() {};

	/**
	 * BS3: Comments.
	 *
	 * @since 1.0.0 Wireframe Child
	 * @type  object BS3_Comments
	 * @see   jQuery addClass()
	 */
	var BS3_Comments = function() {};

	/**
	 * Wireframe_Theme.
	 *
	 * Pass properties via constructor function for abstracting dependency objects.
	 *
	 * @since 1.0.0 Wireframe Child
	 * @param object primary
	 * @param object secondary
	 * @param object images
	 * @param object forms
	 * @param object tables
	 * @param object comments
	 */
	var Wireframe_Theme = function ( primary, secondary, images, forms, tables, comments ) {
		this.primary   = primary;
		this.secondary = secondary;
		this.images    = images;
		this.forms     = forms;
		this.tables    = tables;
		this.comments  = comments;
	};

	/**
	 * Container.
	 *
	 * @since 1.0.0 Wireframe Child
	 */
	function container( Wireframe_Theme ) {
		//console.log( Wireframe_Theme );
	}

	/**
	 * Object.
	 *
	 * Instantiates a new container with dependency objects.
	 *
	 * @since 1.0.0 Wireframe Child
	 */
	container( new Wireframe_Theme(
		new BS3_Primary(),
		new BS3_Secondary(),
		new BS3_Images(),
		new BS3_Forms(),
		new BS3_Tables(),
		new BS3_Comments()
	) );

} ); // Thanks for using MixaTheme products!