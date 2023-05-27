<!-- Na sequencia ele e o 4 a ser chamado -->

<main class="main-box">


<section class="box-confirmacao">
    <p class="msg"> <?php echo $viewVar['mensagem'];?></p>
    <div class="box-botoes">
        <div class="box-voltar">
            <a class="button-voltar" href="<?php echo $viewVar['hrefMensagem'];?>">voltar</a>
        </div>
        <div class="button-sim">
            <a href="<?php echo $viewVar['hrefMensagem'];?>">Ok</a>
        </div>
    </div>

</section>


</main>
