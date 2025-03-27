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

    <section class="p-under p-news p-archive">
      <div class="inner">

        <div class="breadcrumbs">
          <nav>
            <ul>
              <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
              <li>お知らせ一覧</li>
            </ul>
          </nav>
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

        <?php if(have_posts()): while(have_posts()): the_post(); ?>

        <dl>
          <a href="<?php the_permalink(); ?>">
            <dt>
              <span class="time"><?php echo get_the_date(); ?></span>
              <div>
                <?php 
                  $categories = get_the_category();
                  if(!empty($categories)) {
                    foreach($categories as $cat) {
                      echo '<span class="cate">' . esc_html($cat->name) . '</span> ';
                    }
                  }
                ?>
              </div>
            </dt>
            <dd><?php the_title(); ?></dd>
          </a>
        </dl>

        <?php endwhile; endif; ?>

        <?php
          the_posts_pagination(array(
            'mid_size' => 1,
            'end_size' => 1,
            'prev_text' => '＜',
            'next_text' => '＞',
            'type' => 'list',
            'prev_next' => true,
            'before_page_number' => '',
            'after_page_number'  => '',
            'dots_text' => '...'
          ));
        ?>

      </div>
    </section>


    <?php get_template_part('inc/cta'); ?>

  </main>
<?php get_footer(); ?>