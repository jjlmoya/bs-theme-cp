<?php
/*
Template Name: Post Page
Template Post Type: post
*/
get_header();
get_template_part('template-parts/header');
?>
    <div class="p-post l-grid-column">
        <?
        while (have_posts()) : the_post();
            get_template_part('template-parts/content');
        endwhile;
        ?>
    </div>
<?php
get_template_part('template-parts/footer');
get_footer();



