    <?php get_header(); ?>

    <div id="banner">
      <h1>WP Custom</h1>
      <h3>Learn how to help us help you</h3>
    </div>

    <main>
      <a href="<?php echo site_url('/blog'); ?>">
        <h2 class="section-heading">All Blogs</h2>
      </a>

      <section>

        <?php

        $blogArgs = array(
          'post_type' => 'post',
          'posts_per_page' => 2
        );

        $blogposts = new WP_Query($blogArgs);

        while ($blogposts->have_posts()) {
          $blogposts->the_post();

        ?>

          <div class="card">
            <div class="card-image">
              <a href="<?php echo the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="voyage">
              </a>
            </div>

            <div class="card-description">
              <a href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
              </a>
              <p>
                <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
              </p>
              <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
            </div>
          </div>

        <?php  }
         ?>

      </section>

      <h2 class="section-heading">All Projects</h2>

      <section>
        <?php

        $projectArgs = array(
          'post_type' => 'project',
          'posts_per_page' => 2
        );

        $projects = new WP_Query($projectArgs);

        while ($projects->have_posts()) {
          $projects->the_post();

        ?>

          <div class="card">
            <div class="card-image">
              <a href="<?php echo the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="voyage">
              </a>
            </div>

            <div class="card-description">
              <a href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
              </a>
              <p>
                <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
              </p>
              <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
            </div>
          </div>

        <?php  }
        wp_reset_query(); ?>

      </section>

      <h2 class="section-heading">Source Code</h2>

      <section id="section-source">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ratione tempora iusto placeat possimus est alias
          assumenda sit fugiat vel necessitatibus praesentium consectetur totam, accusantium, sunt labore minus quos
          natus.
        </p>
        <a href="#" class="btn-readmore">GitHub Profile</a>
      </section>

      <?php get_footer(); ?>
