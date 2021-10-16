<section class="single-topico">
    <div class="single-topico">
        <div class="head">
            <h2><a href="<?php echo INCLUDE_PATH; ?>">Fórum ></a> <a href="<?php echo INCLUDE_PATH.$idForum; ?>"> <?php echo $nomeForum; ?> > </a> <?php echo $nomeTopico; ?> </h2>
        </div>
        <?php
            foreach($pegarPosts as $key => $value){
        ?>
        <div class="respostas-single">
            <div class="box-respostas">
                <img src="https://wordpress-theme.spider-themes.net/docy/wp-content/uploads/2019/04/smile@2x.png" />
                <p><?php echo $value['nome']; ?> <br /> <?php echo $value['mensagem']; ?></p>
            </div>
        </div>
    <?php } ?>
    </div>
    <div class="publicar">
        <h3>Responda a esse Tópico</h3>
            <form method="post">
            <input type="text" name="nome">
            <textarea name="mensagem"></textarea>
            <input type="hidden" name="topico_id" value="<?php echo $idTopico; ?>">
            <input type="submit" name="cadastrar_post" value="Enviar">
        </form>
    </div>
</section>