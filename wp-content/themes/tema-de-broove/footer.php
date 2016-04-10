		<footer id="rodape" class="footer container-fluid padding-l-no padding-r-no" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="rodape-row-1" class="row">

					<section class="maito-broove text-center col-xs-12 col-sm-12 col-md-3 col-lg-3 margin-b-0-5">
						<span class="mail-broove">
							<a href="mailto:contato@broove.com.br?Subject=[Contato-direto-Site] Mensagem pra Broove" target="_top">
								contato@broove.com.br
							</a>
						</span>
					</section>

					<section class="socialnetwork-broove text-center col-xs-12 col-sm-12 col-md-5 col-lg-5 margin-b-0-5">
						<span class="facebook-broove col-md-2 col-md-offset-4 col-lg-2 col-lg-offset-4">
							<a href="https://www.facebook.com/projetobroove" target="_blank">
								<i class="fa fa-facebook"></i>
							</a>
						</span>
						<span class="youtube-broove col-md-2 col-lg-2">
							<a href="https://www.youtube.com/channel/UCRDopCo-aYzAMaK6hx5wZdQ" target="_blank">
								<i class="fa fa-youtube"></i>
							</a>
						</span>
						<span class="instagram-broove col-md-2 col-lg-2">
							<a href="https://www.instagram.com/instabroove" target="_blank">
								<i class="fa fa-instagram"></i>
							</a>
						</span>
					</section>

					<section class="developed-broove text-center col-xs-12 col-sm-12 col-md-4 col-lg-4 margin-b-0-5">
						<span class="by-brunoluizgr col-xs-12 col-md-12 col-md-6 col-md-offset-1 col-lg-6 col-lg-offset-1">
							<?php _e( 'Desenvolvido por ', 'temadebroove' ); ?>
						</span>
						<span class="brunoluizgr-logo col-xs-12 col-sm-12 col-md-2 col-lg-2">
							<a href="http://brunoluizgr.com" target="_blank">
								<img src="<?php echo get_template_directory_uri() . '/library/images/brunoluizgr-logo-bp.svg'?>" alt="<?php _e( './>runoluizgr', 'temadebroove' ); ?>" width="100%" height="100%"/>
							</a>
						</span>
					</section>

				</div>

				<div id="rodape-row-2" class="row text-center">

					<p class="source-org copyright">
						<span><?php bloginfo( 'name' ); ?></span>
						<span> . </span>
						<span><?php echo date('Y'); ?></span>
					</p>

				</div>

			</div>

		</footer>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
	</body>
</html> <!-- end of site. what a ride! -->
