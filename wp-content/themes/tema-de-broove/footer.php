			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<div>

						<div class="maito-broove">
							<span class="mail-broove">
								<a href="mailto:contato@broove.com.br?Subject=[Contato-Site]" target="_top">
									contato@broove.com.br
								</a>
							</span>
						</div>

						<div class="socialnetwork-broove">
							<span class="facebook-broove">
								<a href="https://www.facebook.com/projetobroove" target="_blank">
									<i class="fa fa-2x fa-facebook"></i>
								</a>
							</span>

							<span class="youtube-broove">
								<a href="https://www.youtube.com/channel/UCRDopCo-aYzAMaK6hx5wZdQ" target="_blank">
									<i class="fa fa-2x fa-youtube"></i>
								</a>
							</span>

							<span class="instagram-broove">
								<a href="https://www.instagram.com/instabroove" target="_blank">
									<i class="fa fa-2x fa-instagram"></i>
								</a>
							</span>
						</div>

						<div class="developed-broove">

							<span class="by-brunoluizgr">
								<?php _e( 'Desenvolvido por', 'temadebroove' ); ?>
							</span>
							<span>MINHA SVG</span>
						</div>

					</div>

					<div class="copyright-broove">
						<p class="source-org copyright">
							<?php bloginfo( 'name' ); ?><span>.com.br</span> . <?php echo date('Y'); ?>
						</p>
					</div>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
