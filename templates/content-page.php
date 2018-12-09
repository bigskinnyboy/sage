<?php
use Roots\Sage\Setup;

if (!Setup\display_sidebar()) :
  echo '<div class="container">';
endif; ?>

<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

<?php
if (!Setup\display_sidebar()) :
  echo '</div>';
endif; ?>
