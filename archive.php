<?php get_header(); ?>
<section id="main">

  <section id="articles_list" class="col-md-9 col-xs-12 col-sm-8 row">
    <h2 id="cat_name"><?php single_cat_title($prefix = '', $display = true); ?> </h2>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!-- Codigo que se generará cuando se imprima cada articulo -->
      <article>
        <?php if ( has_post_thumbnail() ) { ?>
        <div class="col-md-4 col-xs-12">
          <div class="img-responsive img-rounded">
            <a href="<?php the_permalink(); ?>">
              <!-- con list_articles_thumbs traemos las medidas, esto se editó en el archivo funciones -->
              <?php the_post_thumbnail('list_articles_thumbs'); ?>
            </a>
          </div>

          <!-- <img class="img-responsive img-rounded" src="http://lorempixel.com/g/450/370/technics/"> -->

        </div>
        <?php } ?>
        <div class="<?php if ( has_post_thumbnail() ) { ?>col-md-8 <?php } else { ?> col-md-12<?php } ?> col-xs-12 row">
          <hgroup><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></hgroup>
          <div class="date"><?php the_date(); ?> en <?php the_category(); ?></div>
        </div>
        <div class="extract"><?php the_excerpt(); ?></div>
      </article>

    <?php endwhile; else: ?>
      <!-- codigo si no se encuentran los articulos -->

      <h1 class="no-articulos">No se encontraron artículos :( </h1>

    <?php endif; ?>

    <div id="pagination">
      <!-- paginación -->
        <p> <?php previous_posts_link('<- Post Anteriores') ?>
          <?php next_posts_link('Post Siguientes ->') ?></p>
    </div>
  </section>
  <?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>
