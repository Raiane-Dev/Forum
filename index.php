<?php

    include('config.php');
    include('views/modelos/header.php');

    $forumController = new \controladores\forumController();

    //Listagem dos Fóruns
    Router::get('/',function() use ($forumController){
        $forumController->home();
    });

    //Listagem dos Tópicos
    Router::get('/?',function($arr) use ($forumController){
        $forumController->topicos($arr[1]);
    });

    //Tópico/Post único
    Router::get('/?/?',function($arr) use ($forumController){
        $forumController->postSingle($arr);
    });

    if(Router::isExecuted() == false){
        die('Não existe');
    }
    include('views/modelos/footer.php');

?>