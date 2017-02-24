<footer class="footer content-info">
  <div class="container">
    <div class="row">
        <?php 
            $args = array(
                 'page_id' => 53
            );
            $footer_query = new WP_Query( $args );
        ?>
        <?php while ( $footer_query->have_posts() ) : $footer_query->the_post(); ?>
            <?php 
                $thinking_title = get_field('thinking_header');
                if( !empty($thinking_title) ):
            ?>
            <h2><?php the_field('thinking_header'); ?></h2>
            <?php endif; ?>
            <?php 
                $social_links_title = get_field('social_links_header');
                if( !empty($social_links_title) ):
            ?>
            <h3><?php the_field('social_links_header'); ?></h3>
            <?php endif; ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <ul class="social-links">
        <?php
            get_template_part('templates/social-icons');
        ?>
        </ul>
        </div>
  </div>
</footer>
