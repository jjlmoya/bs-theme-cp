<?php

class NavService
{
    public function __construct($modifier)
    {
        switch ($modifier) {
            case 'footer':
                return $this->getFooterElements();
                break;
            default:
                return '';
        }
    }

    private function getSocialFooter()
    {
        $args = array(
            'post_type' => 'bs-social-media',
            'post_status' => 'publish',
            'posts_per_page' => -1
        );

        $posts = new WP_Query($args);
        if (empty($posts)) {
            return '';
        }

        $html = '<div class="og-footer-classic__social l-column l-column--1-4 l-column--mobile--1-1
                         a-pad--x-20 a-pad--mobile-40
                         a-border a-border--light a-border--left a-border--mobile--bottom">
        <h2 class="a-text a-text--xl  a-text--secondary a-text--m">
            Únete a la Comunidad
        </h2>
        <nav class="ml-social-simple a-text l-flex l-flex--wrap a-pad">';
        while ($posts->have_posts()) : $posts->the_post();
            $content = get_the_content();
            $url = get_post_meta(get_the_ID(), 'bs-social-media_link');
            if (isset($url) && sizeof($url) > 0) {
                $url = $url[0];
            }
            $html .= '
			<a href="' . $url . '" class="ml-social-simple__network a-svg a-pad--right-5">
                ' . $content . '   
            </a>';
            unset($post);
        endwhile;
        $html .= ' </nav> </div>';
        return $html;

    }

    private function getAboutFooter()
    {
        return '
            <div class="og-footer-classic__about l-column l-column--1-4 l-column--mobile--1-1
                         a-pad--x-20 a-pad--mobile-40
                         a-border a-border--light a-border--left a-border--mobile--bottom">
                <h2 class="a-text a-text--xl  a-text--secondary a-text--m">
                    Sobre Nosotros
                </h2>
                <nav class="a-text l-flex l-flex--direction-column">
                    <a href="mailto:info@bonseo.es"
                       class="a-text a-text--link a-text--underline a-text--xs a-text--secondary a-pad--top-5 a-text--link--secondary">Contacto</a>
                    <p class="a-text a-text--secondary a-text--xs a-pad--y-5">
                        Dirección: Vilafranca de Bonany,
                        Mallorca, Islas Baleares, 07250
                    </p>
                </nav>
           </div>';
    }

    private function getServiceFooter()
    {

        $args = array(
            'post_type' => 'bs-service',
            'post_status' => 'publish',
            'posts_per_page' => -1
        );

        $posts = new WP_Query($args);
        if (empty($posts)) {
            return '';
        }

        $html = '<div class="og-footer-classic__services l-column l-column--1-4 l-column--mobile--1-1
                         a-pad--x-20 a-pad--mobile-40
                         a-border a-border--light a-border--left a-border--mobile--bottom">
        <a href="/servicios" class="a-text a-text--link a-text--underline a-pad--right a-text--link--secondary a-text a-text--secondary a-text--m">Servicios</a>
        <nav class="a-text l-flex l-flex--direction-column">';
        while ($posts->have_posts()) : $posts->the_post();
            $content = get_the_title();
            $url = get_the_permalink();
            $html .= '
            <a href="' . $url . '" class="a-text a-text--link a-text--underline a-text--xs a-text--secondary a-pad--top-5 a-text--link--secondary">
             ' . $content . ' 
            </a>';
            unset($post);
        endwhile;
        $html .= ' </nav> </div>';
        return $html;
    }

    private function getLegalFooter()
    {
        return '
        <div class="og-footer-classic__others l-column l-column--1-4 l-column--mobile--1-1
                         a-pad--x-20 a-pad--mobile-40
                         a-border a-border--light a-border--left a-border--mobile--bottom">
            <h2 class="a-text a-text--xl  a-pad--right a-text--secondary a-text a-text--secondary a-text--m">
                Otros
            </h2>
            <nav class="a-text l-flex l-flex--direction-column ">
                <a href="#"
                   class="a-text a-text--link a-text--underline a-text--xs a-text--secondary a-pad--top-5 a-text--link--secondary">Política de Privacidad</a>
            </nav>
        </div>';
    }

    public function getFooterElements()
    {
        $html = '';
        $html .= $this->getAboutFooter();
        $html .= $this->getServiceFooter();
        $html .= $this->getLegalFooter();
        $html .= $this->getSocialFooter();
        return $html;
    }


}
