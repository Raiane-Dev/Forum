<section class="topicos">
    <div class="topicos">
        <div class="head">
            <h2>Você está no Tópico: <b><?php echo $forumInfo['nome']; ?></b></h2>
        </div>
    <?php
        foreach($topicos as $key => $value){
    ?>
        <div class="topico-single">
            <div class="box-topico">
            <a href="<?php echo INCLUDE_PATH ?><?php echo $forumInfo['id']; ?>/<?php echo $value['id']; ?>">
            <img src="https://wordpress-theme.spider-themes.net/docy/wp-content/uploads/2020/07/icon-1@2x-1.svg" />
            <h6><?php echo $value['nome']; ?></h6></a>
            </div>
        </div>
    <?php } ?>
    </div>
    <div class="publicar">
        <h3>Publique um Tópico</h3>
            <form method="post">
                <input type="text" name="titulo_topico" />
                <input type="hidden" name="forum_id" value="<?php echo $idForum; ?>" />
                <input type="submit" name="cadastrar_topico" value="Cadastrar!" />
            </form>
        </div>
</section>