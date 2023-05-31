<?php

namespace App\Controllers;

use App\Controllers\Controller;

class SiteController extends Controller
{

    public function exibe()
    {
        $links_navbar = array(
            'href_home'=>'#top','href_about'=>'#about','href_services'=>'#services',
            'href_gallery'=>'#gallery','href_contact'=>'#contact'
        );
        $this->render_layout_site('/site/site',null,null,$links_navbar);
    }   

    public function galeria()
    {   
        $links_navbar = array(
            'href_home'=>APP_HOST,'href_about'=>APP_HOST.'/#about','href_services'=>APP_HOST.'/#services',
            'href_gallery'=>APP_HOST.'/#gallery','href_contact'=>APP_HOST.'/#contact'
        );
        $this->render_layout_site('/site/galeria','/site/galeria','/site/galeria',$links_navbar);
    }

}

?>
