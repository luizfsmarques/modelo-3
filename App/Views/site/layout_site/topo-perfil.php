    <!-- Na sequencia ele e o 2 a ser chamado -->
    <?php
    
    if(!empty($_SESSION['imagem']))
    {
    $imagem = $_SESSION['imagem'];
    }else
    {
    $imagem = 0;
    }
    ?>

    <section class="topo">
            <figure class="box-logo-interno">
                <img class="logo-interno" src="/jc-contabilidade/sistema.jc-contabilidade.com/public/img/logo-interno.png" alt="Imagem da logo jc">
                <!-- O de baixo vai para producao -->
                <!-- <img class="logo-interno" src="/public/img/logo-interno.png" alt="Imagem da logo jc"> -->


            </figure>

            <figure class="box-logo-interno-resp">
                <img class="logo-interno-resp" src="/jc-contabilidade/sistema.jc-contabilidade.com/public/img/logo-interno-resp.png" alt="Imagem da logo jc">
                <!-- O de baixo vai para producao -->
                <!-- <img class="logo-interno-resp" src="/public/img/logo-interno-resp.png" alt="Imagem da logo jc"> -->

            </figure>
        
            <div class="box-pagina-atual">
                <p class="voce-esta">Você está em</p>

                <p class="pagina">
                    <?php 
                        if($viewVar['pagina'] == 'usuarios')
                        {
                            echo "usuário";
                        }else
                        {
                            echo $viewVar['pagina'];
                        }
                    ?>   
                 </p>       
            </div>

            <div class="box-not-user">
                <figure class="box-notification">
                    <a class="link-notification" href="">
                        <img class="notification" src="/jc-contabilidade/sistema.jc-contabilidade.com/public/img/notification.png" alt="Imagem da logo jc">
                        <!-- O de baixo vai para producao -->
                        <!-- <img class="notification" src="/public/img/notification.png" alt="Imagem da logo jc"> -->
 
                    </a>  
                </figure>
                <figure class="box-user-img">
                    <img class="user-img" src="/jc-contabilidade/sistema.jc-contabilidade.com/public/img/<?php if(isset($imagem)){ if($imagem != 0){echo 'imgUsers/'.$imagem;}else{ echo 'user-img.png'; } }?>" alt="Usuário">
                    <!-- O de baixo vai para producao -->
                    <!-- <img class="user-img" src="/public/img/<?php// if(isset($imagem)){ if($imagem != 0){echo 'imgUsers/'.$imagem;}else{ echo 'user-img.png'; } }?>" alt="Usuário"> -->
                    
                </figure>
            </div>
            
        </section>

        <div class="perfil-user">
            <p> <?php echo $viewVar['nome']; ?> </p>
            <div class="link-perfil">
                <a href="<?php echo APP_HOST;?>/usuarios/exibe/<?php echo $_SESSION['codigoUsuario'];?>" >Perfil</a>
            </div>
            <div class="box-logout">
                <a class="logout" href="<?php echo APP_HOST . '/'. $viewVar['pagina'];?>/logout" >Sair</a>
            </div>
            
        </div>

