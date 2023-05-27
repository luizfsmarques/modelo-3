<!-- Na sequencia ele e o 4 a ser chamado -->

<main class="main-box">


<section class="box-confirmacao">
    <p class="msg"> <?php echo $viewVar['msgConfirmacao'];?></p>
    <div class="box-botoes">
        <div class="box-voltar">
            <a class="button-voltar" href="http://localhost:8080/jc-contabilidade/sistema.jc-contabilidade.com/administrador">voltar</a>
            <!-- O de baixo vai para producao -->
            <!-- <a class="button-voltar" href="https://sistema.jc-contabilidade.com/administrador">voltar</a> -->


        </div>
        <div class="button-sim">
            <a href="<?php echo $viewVar['hrefMsgConfirmacao'];?>">Sim</a>
        </div>
    </div>

</section>


</main>
