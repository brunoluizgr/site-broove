<?php get_header(); ?>

  <div id="conteudo" class="container-fluid padding-l-no padding-r-no">
    <div id="conteudo-interno" class="row margin-l-no margin-r-no">
      <main role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

        <section id="inicio" class="container-flex">
          <?php get_template_part('sections/inicio'); ?>
        </section>

        <section id="ep" class="container-flex">
          <?php get_template_part('sections/ep'); ?>
        </section>

        <section id="making-of" class="container-flex">
          <?php get_template_part('sections/making-of'); ?>
        </section>

        <section id="fotos" class="container-flex">
          <?php get_template_part('sections/fotos'); ?>
        </section>

        <section id="letras" class="container-flex">
          <?php get_template_part('sections/letras'); ?>
        </section>

        <section id="contato" class="container-flex">
          <?php get_template_part('sections/contato'); ?>
        </section>

      </main>
    </div>
  </div>

<?php get_footer(); ?>
