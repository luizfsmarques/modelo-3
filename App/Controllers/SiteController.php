<?php //Aqui tem codigo para produção

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
        
    }

}

?>