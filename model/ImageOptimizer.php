<?php

class ImageOptimizer
{
    public $url;
    public $name;
    public $description;
    public $alternative;
    public $text;
    public $fullUrl;
    public $width;
    public $modifier;
    public $imageModifier;
    public $imageMobile;

    public function __construct($url, $name, $description, $alternative)
    {
        $this->url = $url;
        $this->name = $name;
        $this->description = $description;
        $this->alternative = $alternative;
    }

    function render()
    {
        $path = get_template_directory_uri() . '/images/';
        $html = '';
        $srcset = '';
        $url = $path . $this->url;
        if ($this->text) {
            $html .= '<span class="a-image">' . $this->text . '</span>';
        }
        if ($this->fullUrl) {
            $url = $this->fullUrl;
        }
        $width = $this->width ? 'width:' . $this->width . '; ' : '';
        if ($this->imageMobile) {
            $srcset = '<source media="(max-width: 720px)" srcset="' . $path . $this->imageMobile . '">';
        }
        return '
            <picture class="' . $this->modifier . '"  >
              ' . $srcset . '
                <img class="' . $this->imageModifier . ' lazy " 
                     style="' . $width . ' "
                     title="' . $this->name . '"
                     description="' . $this->description . '"
                     alt="' . $this->alternative . '"
                     data-src="' . $url . '" 
                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/>
                     ' . $html . '
            </picture>';
    }

}




