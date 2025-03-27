<?php get_header(); ?>
  <main>

    <div class="under_head head-center">
      <div class="inner">
        <div class="ttl-wrap under_head_ttl">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
    </div>

    <section class="p-under">
      <div class="inner">
        <?php the_content(); ?>
      </div>
    </section>

    <?php get_template_part('inc/cta'); ?>

  </main>
<?php get_footer(); ?>