<?php
/**
 * Functions & definations for theme footer
 *
 *
 */

add_action('cww_portfolio_footer', 'cww_portfolio_copyright', 10);

if (!function_exists('cww_portfolio_copyright')):
	function cww_portfolio_copyright()
	{

		$cww_footer_text = get_theme_mod('cww_footer_text');

		?>
		<footer id="colophon" class="site-footer">
			<div class="container cww-flex">

				<div class="site-info cww-flex">
					<?php if ($cww_footer_text) { ?>
						<div class="footer-copyright">
							<?php echo wp_kses_post($cww_footer_text); ?>
						</div>
					<?php } else { ?>
						<a href="<?php echo esc_url(__('https://wordpress.org/', 'cww-portfolio')); ?>">
							<?php
							/* translators: %s: CMS name, i.e. WordPress.  removed from before 	<div class="container cww-flex"> 	<!-- <?php do_action('cww_portfolio_social_icons'); ?>	-->*/
							printf(esc_html__(' '), 'WordPress');
							?>
						</a>
					<?php } ?>
					<span class="sep"> </span>
					<?php
					$cww_get_current_theme = wp_get_theme();

					/* translators: 1: Theme name, 2: Theme author. 
																											 printf(esc_html__(' '), '<a href="https://codeworkweb.com/themes/cww-portfolio" class="th-name">' . esc_html($cww_get_current_theme->Name) . '</a>', '<a href="https://codeworkweb.com/">Code Work Web</a>');
																											 */
					?>
				</div><!-- .site-info -->
			</div>
		</footer><!-- #colophon -->
		<?php
	}
endif;