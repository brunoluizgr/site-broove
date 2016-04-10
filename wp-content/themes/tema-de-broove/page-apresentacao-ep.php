<?php
/*
 Template Name: Apresentação EP
*/
?>

<?php get_header('interno'); ?>
		<section id="apresentacao-ep" class="container-fluid">
			<div id="content" class="row">
				<div id="content-header" class="row">

				</div>
				<div id="content-body" class="row">
					<div class="col-md-4 col-lg-4 text-right">
						<span><?php _e('Broove EP','temadebroove') ?></span>
						<p><?php _e('por Broove', 'temadebroove') ?></p>
						<p><?php _e('Banda brasileira de verdades.', 'temadebroove') ?></p>
						<p><?php _e('Lançamento 2016', 'temadebroove') ?></p>
					</div>
					<div class="col-md-8 col-lg-8">

						<div class="row">
							<span class="col-md-12 col-lg-12">Tema de Broove</span>
							<span class="col-md-12 col-lg-12">Broove</span>
							<audio src="<?php echo get_template_directory_uri() . '/library/songs/1-Tema-de-Broove.mp3'; ?>" preload controls>
								<p>Seu navegador não suporta o elemento audio.</p>
							</audio>
						</div>

						<div class="row">
							<span class="col-md-12 col-lg-12">Olhar</span>
							<span class="col-md-12 col-lg-12">Broove</span>
							<audio src="<?php echo get_template_directory_uri() . '/library/songs/2-Olhar.mp3'; ?>" controls=""/>
						</div>

						<div class="row">
							<span class="col-md-12 col-lg-12">Sesdotempo</span>
							<span class="col-md-12 col-lg-12">Broove</span>
							<audio src="<?php echo get_template_directory_uri() . '/library/songs/3-Sesdotempo.mp3'; ?>" controls=""/>
						</div>

						<div class="row">
							<span class="col-md-12 col-lg-12">Ícaro</span>
							<span class="col-md-12 col-lg-12">Broove</span>
							<audio src="<?php echo get_template_directory_uri() . '/library/songs/4-Icaro.mp3'; ?>" controls=""/>
						</div>

						<div class="row">
							<span class="col-md-12 col-lg-12">Plin</span>
							<span class="col-md-12 col-lg-12">Broove</span>
							<audio src="<?php echo get_template_directory_uri() . '/library/songs/5-Plin.mp3'; ?>" controls=""/>
						</div>

						<div class="row">
							<span class="col-md-12 col-lg-12">De Hoje Não Passa</span>
							<span class="col-md-12 col-lg-12">Broove</span>
							<audio src="<?php echo get_template_directory_uri() . '/library/songs/6-De-hoje-nao-passa.mp3'; ?>" controls=""/>
						</div>

					</div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>
