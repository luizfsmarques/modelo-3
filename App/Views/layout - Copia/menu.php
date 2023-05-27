 <!-- Na sequencia ele e o 3 a ser chamado -->

<!-- AQUI TEM CODIGO PARA A PRODUÇÃO -->

<?php

function controlandoPermissao($permissao,$elemento)
{   
    if($permissao == 'administrador')
    {
        echo $elemento;
    } 
}

?>

 <div class="menu-sanduiche">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <aside class="box-menu">
            <nav class="menu">
                <h1>MENU</h1>
                <ul>
                    <li>
                        <a class="pri-a" href="<?php echo APP_HOST;?>/dashboard">DASHBOARD</a>
                    </li>
                    <li>
                        <a href="<?php echo APP_HOST;?>/clientes">CLIENTES</a>
                    </li>
                    <li>
                        <a href="<?php echo APP_HOST;?>/servicos">SERVIÇOS</a>
                    </li>
                    <li>
                        <?php $permissaoMenu1 = "<a href='".APP_HOST."/financeiro'>FINANCEIRO</a>"?>
                        <!-- O de baixo vai para producao -->
                        <?php //$permissaoMenu1 = "<a href='https://sistema.jc-contabilidade.com/financeiro'>FINANCEIRO</a>"?>


                        <?php controlandoPermissao($viewVar['permissao'], $permissaoMenu1);?>
                    </li>

                    <li>
                        <?php $permissaoMenu2 = "<a href='".APP_HOST."/administrador'>ADMINISTRADOR</a>"?>
                        <!-- O de baixo vai para producao -->
                        <?php // $permissaoMenu2 = "<a href='https://sistema.jc-contabilidade.com/administrador'>ADMINISTRADOR</a>"?>


                        <?php controlandoPermissao($viewVar['permissao'], $permissaoMenu2);?>
                    </li>
                </ul>
            </nav>
        </aside>