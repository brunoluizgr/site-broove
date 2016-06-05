<!-- CABEÇALHO -->
  <?php get_header(); ?>
<!-- Fim do CABEÇALHO -->

  <div class="container-fluid">
    <div class="row">
      <main>

        <!-- Botões de SOBE e DESCE para controle das Seções -->
        <div id="btn-controla-menu" class="hidden-xs hidden-sm">
          <button id="menu-sobe"></button>
          <button id="menu-desce"></button>
        </div>
        <!-- Fim dos Botões de SOBE e DESCE -->

        <!-- Seção INICIO -->
        <section id="inicio" class="container-flex">
          <?php get_template_part('secoes/inicio'); ?>
        </section>
        <!-- Fim da Seção INICIO -->

        <!-- Seção EP -->
        <section id="ep" class="container-flex">
          <?php get_template_part('secoes/ep'); ?>
        </section>
        <!-- Fim da Seção EP -->

        <!-- Seção MAKING OF >
        <section id="making-of" class="container-flex">
          <?php/* get_template_part('secoes/making-of'); */?>
        </section>
        < Fim da Seção MAKING OF -->

        <!-- Seção FOTOS -->
        <section id="fotos" class="container-flex">
          <?php get_template_part('secoes/fotos'); ?>
        </section>
        <!-- Fim da Seção FOTOS -->

        <!-- Seção CONTATO -->
        <section id="contato" class="container-flex">
          <?php get_template_part('secoes/contato'); ?>
        </section>
        <!-- Fim da Seção CONTATO -->

      </main>
    </div>
  </div>

<!-- RODAPÉ -->
  <?php get_footer(); ?>
<!-- Fim do RODAPÉ -->
