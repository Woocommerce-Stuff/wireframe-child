<?php
/**
 * Functions file for Wireframe Child.
 *
 * PHP version 5.6.0
 *
 * @package   Wireframe_Child
 * @author    MixaTheme, Tada Burke
 * @version   1.0.0 Wireframe_Child
 * @copyright 2016-2017 MixaTheme
 * @license   GPL-3.0+
 * @see       https://mixatheme.com
 * @see       https://github.com/mixatheme/Wireframe
 * @see       https://codex.wordpress.org/Functions_File_Explained
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
 * Autoload.
 * =============================================================================
 *
 * Autoload class dependencies via Composer's `composer.json` file. If you add
 * new class files, you must re-compile `composer.json`. Alternatively, you can
 * use `require_once()` to load your class dependencies 1-by-1.
 *
 * PRO-TIP: To re-compile the autoloader in CLI, cd to the directory where the
 * composer.json file is located, run: composer dump-autoload -o
 *
 * @since 1.0.0 Wireframe_Child
 * @since 1.1.2 Composer
 * @see   composer.json
 * @see   https://getcomposer.org
 *
 * @internal CLI: composer update
 * @internal CLI: composer dump-autoload -o
 * @internal WPCS expects a lowercase filename (PSR-2, PSR-4 invalid).
 */
require_once get_stylesheet_directory() . '/wireframe_dev/vendor/autoload.php';

/**
 * Wireframe API.
 * =============================================================================
 *
 * Loads the parent wireframe.php file so your child theme can wire together
 * all the same objects available in your parent theme.
 *
 * Loading wireframe.php is only necessary if you're an advanced Developer
 * planning to use the parent theme as a framework for your child themes.
 * Otherwise, child themes only need to extend the front-end.
 *
 * @since 1.0.0 Wireframe_Child_Plugin
 */
require_once get_template_directory() . '/wireframe_dev/wireframe.php';

/** Your custom functions below this line... */
/** ------------------------------------------------------------------------- */

/**
 * Overload Parent: Search Form Button.
 *
 * Adds the ability to override the widget search form button.
 *
 * @since 2.7.0 WordPress
 * @since 1.0.0 Wireframe_Child_Theme
 * @param string $text Replaces the form elements.
 * @see   https://developer.wordpress.org/reference/functions/get_search_form/
 * @todo  Glyphicon vs Font Awesome?
 */
function wireframe_theme_search_form_button( $text ) {
	$text = str_replace(
		'input type="submit" class="search-submit" value="Search"',
		'button class="btn btn-primary"><i class="fa fa-search"></i></button',
		$text
	);
	return $text;
}
add_filter( 'get_search_form', 'wireframe_theme_search_form_button' );

