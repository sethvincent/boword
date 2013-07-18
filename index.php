<?php get_header(); ?>
    
<main role="main" id="main">
  <div class="container">
    <?php query_posts(); ?>
    
    <?php while (have_posts()) : the_post(); ?>

      <div class="post <?php echo get_cat_item_classes(); ?> <?php echo get_tag_item_classes(); ?>">
        <a href="<?php the_permalink(); ?>" class="modal">
          <div class="post-image"><?php the_post_thumbnail( 'small' ); ?></div>
          <h2 class="post-title"><?php the_title(); ?></h2>
        </a>
      </div>

    <?php endwhile; ?>
  </div><!-- /.container -->
</main><!-- /main -->

<?php get_footer(); ?>