<?php
get_header();
get_template_part('template-parts/header');
while (have_posts()) : the_post();
    get_template_part('template-parts/content');
endwhile;
get_template_part('template-parts/footer');
get_footer();
