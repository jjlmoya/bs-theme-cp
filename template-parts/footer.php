<?php
require_once get_template_directory(dirname(__FILE__)) . '/service/NavService.php';
$nav = new NavService('footer');


?>

<footer class="og-footer-classic a-bg--dark l-flex l-flex--wrap a-pad u-shadow--top">
    <?php echo $nav->getFooterElements() ?>
</footer>