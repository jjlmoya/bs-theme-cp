<?php
$image = new ImageOptimizer('logo.png', 'CintiPlanes', 'CintiPlanes', 'Logo CintiPlanes');
$image->modifier = ' a-pad-0';
$image->imageModifier = 'a-image a-pad-5';

require_once get_template_directory(dirname(__FILE__)) . '/service/NavService.php';
$nav = new NavService('footer');


?>
<header class="og-header-double l-grid-column--full l-position--sticky u-layer-1 og-header-double--overflow">
    <div class="og-header-double--logo a-bg--light l-flex l-flex--justify-center l-flex--align-center">
        <?php echo $image->render(); ?>
    </div>
    <nav class="og-header-double--navigation
                l-flex l-flex--align-center
                a-pad-5 a-bg--mono-1">
        <?php echo $nav->getHeaderElements(); ?>

    </nav>
</header>