<?php
/*
Template Name: WMP
Template Post Type: page
*/
get_header();
get_template_part('template-parts/header');
?>
    <div class="p-webmaster l-grid-column a-pad--y ml-content-simple og-content-plain">
        <?
        while (have_posts()) : the_post();
            get_template_part('template-parts/content');
        endwhile;
        ?>
    </div>
<?php
get_template_part('template-parts/footer');
get_footer();



