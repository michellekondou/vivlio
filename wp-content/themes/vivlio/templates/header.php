<header class="banner">
  <div class="container-fluid">
    <div class="row">
      <a class="col-xs-4 brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <ul class="col-xs-8 pull-right social-links">
          <?php
            get_template_part('templates/social-icons');
          ?>
      </ul>
    </div>
  </div>
</header>
