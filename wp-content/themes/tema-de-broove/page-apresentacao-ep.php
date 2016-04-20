<?php
/*
 Template Name: Apresentação EP
*/
?>

<?php get_header('interno'); ?>
		<section id="apresentacao-ep" class="container-fluid">
			<div class="row">
				<div id="cabecalho" class="row">
					<div id="capa-do-ep" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
						<div id="imagem-de-fundo"></div>
						<div id="imagem-da-frente" class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
							<img src="<?php echo get_template_directory_uri() . '/library/images/capa-ep.png' ?>" width="100%" height="100%">
						</div>
					</div>
				</div>

				<div id="corpo" class="row padding-t-2">

					<div class="col-md-4 col-lg-4 text-right">
						<span><?php _e('Broove EP','temadebroove') ?></span>
						<p><?php _e('por Broove', 'temadebroove') ?></p>
						<button><?php _e('Download do Álbum', 'temadebroove') ?></button>
						<p><?php _e('Bio:', 'temadebroove')?> <?php _e('Banda brasileira de verdades.', 'temadebroove') ?></p>
						<p><?php _e('Lançamento 2016', 'temadebroove') ?></p>
					</div>

					<div class="col-md-8 col-lg-8">
						<div class="row margin-b-2">
							<span class="col-md-12 col-lg-12 titulo-musica"><?php _e('Tema de Broove','temadebroove') ?></span>
							<span class="col-md-12 col-lg-12 autor-musica"><?php _e('Broove','temadebroove') ?></span>
							<span class="col-md-12 col-lg-12 tocador-musica">
								<audio class="col-md-12 col-lg-12" src="<?php echo get_template_directory_uri() . '/library/songs/1-Tema-de-Broove.mp3'; ?>" preload="auto">
									<p><?php _e('Seu navegador não suporta o elemento de áudio.','temadebroove') ?></p>
								</audio>
							</span>
						</div>
						<div class="row margin-b-2">
							<span class="col-md-12 col-lg-12 titulo-musica"><?php _e('Olhar','temadebroove') ?></span>
							<span class="col-md-12 col-lg-12 autor-musica"><?php _e('Broove','temadebroove') ?></span>
							<span class="col-md-12 col-lg-12 tocador-musica">
								<audio class="col-md-12 col-lg-12" src="<?php echo get_template_directory_uri() . '/library/songs/2-Olhar.mp3'; ?>" preload="auto">
									<p><?php _e('Seu navegador não suporta o elemento de áudio.','temadebroove') ?></p>
								</audio>
						</div>

						<div class="row margin-b-2">
							<span class="col-md-12 col-lg-12 titulo-musica"><?php _e('Sesdotempo','temadebroove') ?></span>
							<span class="col-md-12 col-lg-12 autor-musica"><?php _e('Broove','temadebroove') ?></span>
							<span class="col-md-12 col-lg-12 tocador-musica">
								<audio class="col-md-12 col-lg-12" src="<?php echo get_template_directory_uri() . '/library/songs/3-Sesdotempo.mp3'; ?>" preload="auto">
									<p><?php _e('Seu navegador não suporta o elemento de áudio.','temadebroove') ?></p>
								</audio>
							</span>
						</div>

						<div class="row margin-b-2">
							<span class="col-md-12 col-lg-12 titulo-musica"><?php _e('Icaro','temadebroove') ?></span>
							<span class="col-md-12 col-lg-12 autor-musica"><?php _e('Broove','temadebroove') ?></span>
							<span class="col-md-12 col-lg-12 tocador-musica">
								<audio class="col-md-12 col-lg-12" src="<?php echo get_template_directory_uri() . '/library/songs/4-Icaro.mp3'; ?>" preload="auto">
									<p><?php _e('Seu navegador não suporta o elemento de áudio.','temadebroove') ?></p>
								</audio>
							</span>
						</div>

						<div class="row margin-b-2">
							<span class="col-md-12 col-lg-12 titulo-musica"><?php _e('Plin','temadebroove') ?></span>
							<span class="col-md-12 col-lg-12 autor-musica"><?php _e('Broove','temadebroove') ?></span>
							<span class="col-md-12 col-lg-12 tocador-musica">
								<audio src="<?php echo get_template_directory_uri() . '/library/songs/5-Plin.mp3'; ?>" preload="auto">
									<p><?php _e('Seu navegador não suporta o elemento de áudio.','temadebroove') ?></p>
								</audio>
							</span>
						</div>

						<div class="row">
							<span class="col-md-12 col-lg-12 titulo-musica"><?php _e('De Hoje Nao Passa','temadebroove') ?></span>
							<span class="col-md-12 col-lg-12 autor-musica"><?php _e('Broove','temadebroove') ?></span>
							<span class="col-md-12 col-lg-12 tocador-musica">
								<audio class="col-md-12 col-lg-12" src="<?php echo get_template_directory_uri() . '/library/songs/6-De-hoje-nao-passa.mp3'; ?>" preload="auto">
									<p><?php _e('Seu navegador não suporta o elemento de áudio.','temadebroove') ?></p>
								</audio>
							</span>
						</div>

					</div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>
