<?php get_header(); ?>
    
<main role="main" id="main">
  <div class="container">

    <?php while (have_posts()) : the_post(); ?>
      <div id="page">
        <h1 class="content-title"><?php the_title(); ?></h1>
        <div class="content-body"><?php the_content(); ?></div>
      </div>
    <?php endwhile; ?>

  </div><!-- /.container -->
</main><!-- /#main -->

<?php get_footer(); ?>