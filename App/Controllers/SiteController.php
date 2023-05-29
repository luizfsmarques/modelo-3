<?php


// PAREI AQUI !!!! REINSTALAR O AUTOLOAD COM O COMPOSER...
//POIS COPIEI E COLEI DA JC...
//ENTÃO APAGAR TODO O VENDOR, JSON, ETC... E REINSTALAR TODAS AS DEPENDENCIAS DE NOVO!!!!
//AUTOLOAD E PHPMAILER...
//SEGUINDO AS ANOTAÇÕES DO DEVMEDIA


namespace App\Controllers;

use App\Controllers\Controller;

class SiteController extends Controller
{

    public function exibe()
    {
        $this->render_layout_site('/site/site');
    }   

    public function galeria()
    {
        echo 'estamos na galeria <br>';
    }

}

?>