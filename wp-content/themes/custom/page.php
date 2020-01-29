<?php get_header();

while(have_posts()) {
  have_posts();

?>
<h2 class="page-heading"><?php the_title(); ?></h2>
<div id="post-container">
  <section id="blogpost">
    <div class="card">

    <?php if(has_post_thumbnail()){ ?>
      <div class="card-image">
        <img src="<?php echo get_the_post_thumbnail(get_the_ID()); ?>" alt="voyage">
      </div>
      <?php }?>

      <div class="card-description">
        <?php the_content(); ?>
      </div>
    </div>

  </section>
  <?php } ?>

  <aside id="sidebar">
    <h3>Sidebar Heading</h3>
    <p>Sidebar heading</p>
  </aside>
</div>

<?php get_footer(); ?>
