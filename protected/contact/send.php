<?php

if(isset($_POST['contact'])){
    $danger = [];
    // verification 

    $name = strlen($_POST['name']);
    if(empty($_POST['name']) || $name < 2 || !preg_match('/^[a-zA-Z_ ]+$/' , trim($_POST['name'])) ){
        $danger['name'] = "Votre nom n'est  pas valide  , votre nom doit contenir que des lettres ";
    }


    $sujet = strlen(trim($_POST['sujet']));
    if(empty($_POST['sujet']) || $sujet < 2 || !preg_match('/^[a-zA-Z0-9_ ]+$/' , trim($_POST['sujet'])) ){
        $danger['sujet'] = " votre sujet n'est pas valide , il doit avoir au moins 3 caractere ";
    }


    if(empty($_POST['mail'])  || !filter_var(trim($_POST['mail']) , FILTER_VALIDATE_EMAIL)){
        $danger['mail'] = "Votre adresse e-mail n'es pas valide ";
    }


    $message = strlen(trim($_POST['message']));
    if(empty($_POST['message']) ||$message < 2){
        $danger['message'] = " Votre message doit avoir au moins 3 caractere ex : Aide";
    } elseif ($message > 255 ) {
        $danger['limit'] = "Votre message n'est doit pas depasser 255 caractere ";
    }



    if(empty($danger) && !empty($_POST) ){

        $to = "laurentmwn@gmail.com";
        $user = $_POST['mail'];
        $message = $_POST['message'];
        $sujet = $_POST['sujet'];

        $send = mail( $to . PHP_EOL . PHP_EOL . "user : $user", $sujet , $message  );

        if($send === true){
            $success['mail'] = "{$_POST['name']} votre demande a été envoyer avec succes  , nous allons vous contacté à l'adresse {$_POST['mail']} " ;
        }


       
    }
}