<?php get_header(); ?>

  <div id="content">
    <div id="inner-content" class="wrap cf">

      <main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

        <section class="inicio" id="inicio">
          <?php get_template_part('sections/home'); ?>
        </section>

        <section class="ep" id="ep">
          <?php get_template_part('sections/ep'); ?>
        </section>

        <section class="making-of" id="making-of">
          <?php get_template_part('sections/making-of'); ?>
        </section>

        <section class="fotos" id="fotos">
          <?php get_template_part('sections/fotos'); ?>
        </section>

        <section class="letras" id="letras">
          <?php get_template_part('sections/letras'); ?>
        </section>

        <section class="contato" id="contato">
          <?php get_template_part('sections/contato'); ?>
        </section>

      </main>
    </div>
  </div>

<?php get_footer(); ?>
