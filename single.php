<?php get_header(); ?>
<main>

    <div class="under_head head-center">
      <div class="inner">
        <div class="ttl-wrap under_head_ttl">
          <div class="en">NEWS</div>
          <h1>お知らせ</h1>
        </div>
      </div>
    </div>

    <section class="p-under p-news p-single">
      <div class="inner">

        <div class="breadcrumbs">
          <nav>
            <ul>
              <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
              <li><a href="<?php echo home_url('/news'); ?>">お知らせ一覧</a></li>
              <li><?php the_title(); ?></li>
            </ul>
          </nav>
        </div>

        <div class="contets">
          <div class="tag">
            <span class="time"><?php echo get_the_date(); ?></span>
            <span class="cate"><?php the_category(', '); ?></span>
          </div>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </div>


        <div class="btn_next-prev">
          <div class="prev">
            <?php
            $prev_post = get_previous_post();
            if (!empty($prev_post)) :
            ?>
              <a href="<?php echo get_permalink($prev_post->ID); ?>">＜</a>
            <?php endif; ?>
          </div>
          <div class="next">
            <?php
            $next_post = get_next_post();
            if (!empty($next_post)) :
            ?>
              <a href="<?php echo get_permalink($next_post->ID); ?>">＞</a>
            <?php endif; ?>
          </div>
        </div>


        <?php
          $categories = get_categories(array(
            'orderby' => 'name',
            'order'   => 'ASC',
          ));
        ?>
        <div class="cate-wrap">
          <a class="<?php echo (is_home() || is_archive() && !is_category()) ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/news')); ?>">ALL</a>
          <?php foreach($categories as $category) : ?>
              <a class="<?php echo (is_category($category->term_id)) ? 'active' : ''; ?>" href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo esc_html($category->name); ?></a>
          <?php endforeach; ?>
        </div>

      </div>
    </section>


    <?php get_template_part('inc/cta'); ?>

  </main>
<?php get_footer(); ?>