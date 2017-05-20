<?php
/**
 * Content None template file for Wireframe themes.
 *
 * Template part for displaying a message that posts cannot be found.
 *
 * PHP version 5.6.0
 *
 * @package   Wireframe Child
 * @author    MixaTheme, Tada Burke
 * @version   1.0.0 Wireframe Child
 * @copyright 2016 MixaTheme
 * @license   GPL-3.0+
 * @see       https://mixatheme.com
 * @see       https://github.com/mixatheme/wireframe-child
 * @see       https://codex.wordpress.org/Template_Hierarchy
 * @see       https://developer.wordpress.org/themes/basics/template-files
 *
 * This software is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this software. If not, see <http://www.gnu.org/licenses/>.
 */

?>
<section class="no-results not-found">

	<header class="page-header">
		<h1 class="page-title text-center"><?php esc_html_e( 'Nothing Found', 'wireframe-theme' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content text-center">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'wireframe-theme' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'wireframe-theme' ); ?></p>

			<div class="row">
				<div class="text-center col-md-6 col-md-offset-3">
					<?php get_search_form(); ?>
				</div>
			</div>

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wireframe-theme' ); ?></p>

			<div class="row">
				<div class="text-center col-md-6 col-md-offset-3">
					<?php get_search_form(); ?>
				</div>
			</div>

		<?php endif; ?>

	</div><!-- .page-content -->

</section><!-- .no-results -->
