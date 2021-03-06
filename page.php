<?php get_header(); ?>
<section id="main">

  <section id="articles_list" class="col-md-9 col-xs-12 col-sm-8 row">


    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!-- Codigo que se generará cuando se imprima cada articulo -->
      <!-- <h2 id="cat_name">Nombre de la categoria </h2> -->
      <article class="">
        <?php if ( has_post_thumbnail() ) { ?>
        <div class="col-md-6 col-xs-12">
          <div class="img-responsive img-rounded">
            <a href="<?php the_permalink(); ?>">
              <!-- con list_articles_thumbs traemos las medidas, esto se editó en el archivo funciones -->
              <?php the_post_thumbnail('list_articles_thumbs'); ?>
            </a>
          </div>
        </div>
        <?php } ?>
        <div class="<?php if ( has_post_thumbnail() ) { ?>col-md-6 <?php } else { ?> col-md-12<?php } ?> col-xs-12 row">
          <hgroup><h2 class="titulo_pagina"><?php the_title(); ?></h2></hgroup>
        </div>
        <div class="extract"><?php the_content(); ?></div>
      </article>

    <?php endwhile; else: ?>
      <!-- codigo si no se encuentran los articulos -->

      <h1 class="no-articulos">No se encontraron artículos :( </h1>

    <?php endif; ?>
  </section>
  <?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>
