<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
</head>
<body>
  <?php get_template_part('nav-header'); ?>



    
    
    <?php get_template_part('nav-footer'); ?>
    <?php get_footer(); ?>
    <div id="main-content">
      <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
</body>
</html>

