<?php get_header('interno'); ?>

			<section id="pagina-nao-encontrada" class="container-fluid padding-t-5 margin-t-4 margin-b-2">
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 text-center">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h1><?php _e('Pagina nao encontrada!', 'temadebroove') ?></h1>
							<p><i id="nota-nao-encontrada" class="fa fa-music fa-4x"></i><p>
								<p><?php _e('Parece que você tocou uma nota errada e acessou uma página que não está disponível ou foi removida. =X', 'temadebroove') ?></p>
								<p class="margin-t-2"><a href="<?php echo(get_site_url()) ?>"><button id="btn-volta-home" class="btn"><?php _e('Voltar ao Inicio', 'temadebroove') ?></button></a></p>
						</div>
					</div>
				</div>
			</section>

<?php get_footer(); ?>
