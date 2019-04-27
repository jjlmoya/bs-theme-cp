<?php
$image = new ImageOptimizer('logo.png', 'Bonseo', 'Bonseo', 'Logo Bonseo');
$image->modifier = 'l-column--1-1 l-position--absolute  a-pad-0';
$image->imageModifier = 'a-image l-position--absolute l-position--absolute--center-x og-logo-inline__image';
?>
<div class="og-logo-inline
    a-bg--mono-0
    l-flex u-layer-5 u-shadow--bottom l-position">
    <a href="/">
        <?php echo $image->render(); ?>
    </a>
    <nav class="og-logo-inline__navigation og-logo-inline__navigation--left l-flex l-flex-item--align-center l-column--1-1 l-flex--justify-end">
        <a href="/servicios"
           class="a-text a-text--link a-text--capitalize og-logo-inline__navigation__link">Servicios</a>
        <a href="/hazlo-tu-mismo"
           class="a-text a-text--link a-text--capitalize og-logo-inline__navigation__link">DIY</a>
    </nav>
    <nav class="og-logo-inline__navigation og-logo-inline__navigation--right l-flex l-flex-item--align-center l-column--1-1 l-flex--justify-start">
        <a href="/seo" class="a-text a-text--link a-text--capitalize og-logo-inline__navigation__link">SEO</a>
        <a href="/cursos" class="a-text a-text--link a-text--capitalize og-logo-inline__navigation__link">Cursos</a>
    </nav>
</div>