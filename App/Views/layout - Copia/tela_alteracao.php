<!-- Na sequencia ele e o 4 a ser chamado -->

<main class="main-box">

<section class="box-alteracao">
    <p class="msg">Alteração <?php echo $viewVar['msg'];?></p>

    <?php
    if($viewVar['campo'] == 'telefone')
    {
        echo "<p class='formato-campo'> Formato: DDD912345678 </p>";
    }
    if($viewVar['campo'] == 'email')
    {
        echo "<p class='formato-campo'> Formato: meuemail@email.com </p>";
    }
    ?>
    <section class="box-alterar">
        <form id="formulario" action="<?php echo APP_HOST;?>/usuarios/atualizaUsua/<?php echo $viewVar['codigoUsuario'];?>/<?php echo $viewVar['campo'];?>" method="POST">
            <div class="novo-dado">
                <p>Adicione <?php echo $viewVar['dado'];?> </p>
                <div>
                    <input type='<?php if($viewVar["campo"] == "email"){echo"email";}else{echo "text";} ?>' required name="novo-<?php echo $viewVar['campo'];?>" placeholder="Digite<?php echo $viewVar['dado'];?>"
                    value="<?php if(isset($viewVar['novo-dado'])){echo $viewVar['novo-dado'];}?>">
                </div>
                
            </div>
            <div class="repita-dado">
                <p>Repita <?php echo $viewVar['dado'];?> </p>
                <div>
                    <input type='<?php if($viewVar["campo"] == "email"){echo "email";}else{echo "text";} ?>' required name="repita-<?php echo $viewVar['campo'];?>" placeholder="Repita<?php echo $viewVar['dado'];?>"
                    value="<?php if(isset($viewVar['repita-dado'])){echo $viewVar['repita-dado'];}?>">
                </div>
            </div>
    
        
            <div class="box-botoes">
                <div class="box-voltar">
                    <a class="button-voltar" href="<?php echo APP_HOST;?>/usuarios/exibe/<?php echo $viewVar['codigoUsuario'];?>">voltar</a>
                </div>
                <div class="button-sim">
                    <!-- <button type='submit'> Sim </button> -->
                    <button type='submit'> Alterar</button>

                </div>
            </div>
        </form>
    </section>

</section>


</main>
