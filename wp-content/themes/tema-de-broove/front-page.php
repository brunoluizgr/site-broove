<?php get_header(); ?>

  <div id="conteudo">
    <div id="conteudo-interno">
      <main role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
        <section class="inicio" id="inicio">
          <?php get_template_part('sections/inicio'); ?>
        </section>
        <section class="ep" id="ep">
          <?php get_template_part('sections/ep'); ?>
        </section>
        <section class="making-of" id="making-of" style="display:none;">
          <?php get_template_part('sections/making-of'); ?>
        </section>
        <section class="fotos" id="fotos" style="display:none;">
          <?php get_template_part('sections/fotos'); ?>
        </section>
        <section class="letras" id="letras" style="display:none;">
          <?php get_template_part('sections/letras'); ?>
        </section>
        <section class="contato" id="contato" style="display:none;">
          <?php get_template_part('sections/contato'); ?>
        </section>
      </main>
    </div>
  </div>

<?php get_footer(); ?>
