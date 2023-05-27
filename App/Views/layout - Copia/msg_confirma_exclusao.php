<!-- Na sequencia ele e o 4 a ser chamado -->

<main class="main-box">


<section class="box-confirmacao">
    <p class="msg"> <?php echo $viewVar['msgConfirmacao'];?></p>
    <div class="box-botoes">
        <div class="box-voltar">
            <a class="button-voltar" href="<?php echo $viewVar['hrefMsgNegacao'];?>">Não</a>
        </div>
        <div class="button-sim">
            <a href="<?php echo $viewVar['hrefMsgConfirmacao'];?>">Sim</a>
        </div>
    </div>
</section>


</main>
