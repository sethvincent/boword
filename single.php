<?php get_header(); ?>
    
<main role="main" id="main">
  <div class="container">    
    <?php while (have_posts()) : the_post(); ?>

      <div class="post <?php echo get_cat_item_classes(); ?> <?php echo get_tag_item_classes(); ?>">
        <a href="<?php the_permalink(); ?>" class="modal">
          <h2 class="post-title"><?php the_title(); ?></h2>
          <?php the_time('l, F jS, Y') ?>
          By <?php the_author_posts_link(); ?>
          <?php the_content(); ?>
        </a>
      </div>

    <?php endwhile; ?>
  </div><!-- /.container -->
</main><!-- /main -->

<?php get_footer(); ?>