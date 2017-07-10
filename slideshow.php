<div id="no-slide">
    <!-- si se quiere mostrar especificamente una categoria: -->
    <?php// query_posts('category_name=slider'); ?>
    <section id="slideshow" class="col-md-12 row  col-xs-12">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="slide">
      <?php if ( has_post_thumbnail() ) { ?>
      <div class="col-md-6 row col-xs-12">
        <div class="img-responsive img-rounded">
          <a href="<?php the_permalink(); ?>">
            <!-- con list_articles_thumbs traemos las medidas, esto se editó en el archivo funciones -->
            <?php the_post_thumbnail('list_articles_thumbs'); ?>
          </a>
        </div>
      </div>
      <?php } ?>
      <article class="<?php if ( has_post_thumbnail() ) { ?>col-md-6 <?php } else { ?> col-md-12<?php } ?> col-xs-12">
        <hgroup><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></hgroup>
        <div class="date"><?php the_date(); ?> en <?php the_category(); ?></div>
        <div class="extract"><?php the_excerpt(); ?></div>
      </article>
      <div class="clearfix"></div>
    </div>
  <?php endwhile; else: ?>
    <!-- codigo si no se encuentran los articulos -->

    <h1 class="no-articulos">No se encontraron artículos :( </h1>

  <?php endif; ?>

  </section>
</div>
