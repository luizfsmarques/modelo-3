<?php //Aqui tem codigo para produção

namespace App\Controllers;

abstract class Controller
{
    private $viewVar;

    public function render($view)
    {
        require_once PATH . "/App/Views/" . $view . ".html";   
    }

    public function renderPHP($view)
    {
        $viewVar = $this->getViewVar();

        require_once PATH . "/App/Views/" . $view . ".php";
        
    }

    public function render_layout_site($view,$style=null)
    {

        $viewVar = $this->getViewVar();

        require_once PATH . "/App/Views/site/layout_site/header.php";
        require_once PATH . "/App/Views/" . $view . ".php";
        // require_once PATH . "/App/Views/" . $view . ".html";
        require_once PATH . "/App/Views/site/layout_site/footer.php";

    }   

    public function redirect($view)
    {
        header("Location:" . APP_HOST . $view);
        exit;
    }

    public function mensagem($msg, $paginaAtual, $hrefMensagem)
    {
        $this->setViewVar('mensagem', $msg);
        $this->setViewVar('pagina', $paginaAtual);
        $this->setViewVar('hrefMensagem', $hrefMensagem);
        $this->renderLayout('layout/mensagem','layoutCSS/mensagem');
    }

    public function setViewVar($varName, $varValue)
    {
        if( $varName!="" && $varValue!="")
        {
            $this->viewVar[$varName] = $varValue;
        }
        
    }

    public function getViewVar()
    {
        return $this->viewVar;
    }

}

?>