<?php get_template_part('templates/carousel'); ?>
<div class="container">
  <header class="subject">
  <?php 
    $title = get_field('title');
    if( !empty($title) ):
  ?>
  <h2><?php the_field('title'); ?></h2>
  <?php endif; ?>
  <?php 
    $subtitle = get_field('subtitle');
    if( !empty($subtitle) ):
  ?>
  <h3><?php the_field('subtitle'); ?></h3>
  <?php endif; ?>
  </header>
</div>
<section class="container-fluid cta-form"> 
  <div class="row">
  <?php get_template_part('templates/mailchimp'); ?>
  </div>
</section>
<div class="container">
  <article>
  <?php 
    $main = get_field('main_content');
    if( !empty($main) ):
  ?>
  <?php the_field('main_content'); ?>
  <?php endif; ?>
  </article>
</div>