		<footer id="rodape" class="footer container-fluid">

				<!-- Seção do CONTEÚDO DO RODAPÉ -->
				<div id="rodape-row-1" class="row">

					<!-- Seção do EMAIL DE CONTATO -->
					<section class="col-xs-12 col-md-4 col-lg-4 text-center margin-t-1">
						<span>
							<a href="mailto:contatobroove@gmail.com.br?Subject=[Contato-automatico] Mensagem pro Broove" target="_bla">
								contato@broove.com.br
							</a>
						</span>
					</section>
					<!-- Fim da Seção do EMAIL DE CONTATO -->

					<!-- Seção das REDES SOCIAIS -->
					<section class="col-xs-12 col-md-4 col-lg-4 text-center margin-t-1">

						<!-- TÍTULO das Redes Sociais -->
						<div class="row">
							<h3><?php _e( 'Siga-nos nas redes sociais!', 'temadebroove' ); ?></h3>
						</div>
						<!-- Fim do TÍTULO das Redes Sociais -->

						<!-- ÍCONES das Redes Sociais -->
						<div class="row margin-t-1">

							<!-- Facebook do Broove -->
							<span class="facebook-broove col-xs-4">
								<a title="<?php _e( 'Facebook', 'temadebroove' ); ?>" alt="<?php _e( 'Facebook', 'temadebroove' ); ?>" href="https://www.facebook.com/projetobroove" target="_blank">
									<i class="fa fa-facebook"></i>
								</a>
							</span>
							<!-- Fim do Facebook do Broove -->

							<!-- Youtube do Broove -->
							<span class="youtube-broove col-xs-4">
								<a title="<?php _e( 'Youtube', 'temadebroove' ); ?>" alt="<?php _e( 'Youtube', 'temadebroove' ); ?>" href="https://www.youtube.com/c/projetobroove" target="_blank">
									<i class="fa fa-youtube"></i>
								</a>
							</span>
							<!-- Fim do Youtube do Broove -->

							<!-- Instagram do Broove -->
							<span class="instagram-broove col-xs-4">
								<a title="<?php _e( 'Instagram', 'temadebroove' ); ?>" alt="<?php _e( 'Instagram', 'temadebroove' ); ?>" href="https://www.instagram.com/projetobroove" target="_blank">
									<i class="fa fa-instagram"></i>
								</a>
							</span>
							<!-- Fim do Instagram do Broove -->

						</div>
						<!-- Fim dos ÍCONES das Redes Sociais -->

					</section>
					<!-- Fim da Seção das REDES SOCIAIS -->

					<!-- Seção dos DIREITOS RESERVADOS -->
					<section class="col-xs-12 col-md-4 col-lg-4 text-center margin-t-1">
						<span class="col-xs-12 col-md-6 col-lg-6 text-center">
							<p class="margin-b-no"><?php _e( 'Desenvolvido por ', 'temadebroove' ); ?></p>
						</span>
						<span class="col-xs-4 col-sm-4 hidden-md hidden-lg"></span>
						<span class="col-xs-4 col-sm-4 col-md-6 col-lg-6">
							<a href="http://brunoluizgr.com" title="<?php _e( 'brunoluizgr', 'temadebroove' ); ?>" alt="<?php _e( 'brunoluizgr', 'temadebroove' ); ?>" target="_blank">
								<img id="brunoluizgr-copyright" class="img-responsive" src="<?php echo(get_template_directory_uri() . '/library/images/brunoluizgr-logo-bp.svg'); ?>">
							</a>
						</span>
						<span class="col-xs-4 col-sm-4 hidden-md hidden-lg"></span>
					</section>
					<!-- Fim da Seção dos DIREITOS RESERVADOS -->

				</div>
				<!-- Fim da Seção do CONTEÚDO DO RODAPÉ -->

				<!-- Seção dos DIREITOS AUTORAIS -->
				<div id="rodape-row-2" class="row">

					<p class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
						<span><?php bloginfo( 'name' ); ?></span>
						<span> . </span>
						<span><?php _e('Todos direitos reservados', 'temadebroove'); ?></span>
						<span> . </span>
						<span><?php echo date('Y'); ?></span>
					</p>

				</div>
				<!-- Fim da Seção dos DIREITOS AUTORAIS -->

		</footer>

		<?php wp_footer(); ?>
	</body>
</html>
