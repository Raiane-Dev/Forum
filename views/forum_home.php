<section class="foruns">
    <div class="foruns">
        <?php
            foreach($foruns as $key => $value){
        ?>
        <div class="forum-single">
            <div class="box-forum">    
                <a href="<?php echo INCLUDE_PATH ?><?php echo $value['id']; ?>">
                <img src="https://wordpress-theme.spider-themes.net/docy/wp-content/uploads/2021/04/icon-8@2x.svg" />
                <h6><?php echo $value['nome']; ?></h6></a>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="publicar">
        <h3>Publique um Forum</h3>
        <form method="post">
            <input type="text" name="titulo_forum" />
            <input type="submit" name="cadastrar_forum" value="Cadastrar!" />
        </form>
    </div>
</section>