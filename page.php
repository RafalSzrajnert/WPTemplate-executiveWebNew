
  <?php get_header(); ?>

  <?php the_post(); ?>

  <section>
      <h1><?php echo the_title(); ?></h1>
      <div><?= the_content(); ?></div>
  </section>

  <?php get_footer(); ?>
