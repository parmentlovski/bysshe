<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type"  content="text/html charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bienvenue sur le site web officiel de Bysshe, un groupe de rock psychédélique du Haut Doubs">
    <meta name="author" content="Parmentelot Bryan">
    <title>Bysshe Band - Official Website</title>

    <!-- Add css specifiq at this theme -->
    <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body class="container-fluid">

    <header id="header-page" class="b"> <!-- begining header  -->
        <div class="row justify-content-start align-items-center justify-content-md-center">
            <div id="content-logo">
                <a href="/">
                <img src="wp-content/themes/bysshe/assets/img/bysshewhite.png" alt="logo du groupe Bysshe Band" height="1031" width="1181">
                </a>
            </div>
            <div class="burger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
        <div class="content-menu"> <!-- begining menu  -->
            <div class="row">
                <div class="menu col-12 offset-md-1 col-md-5">
                    <?php wp_nav_menu(); ?>
                </div>
                <div class="form col-12 col-md-6 d-flex flex-column align-items-center">
                    <form action="accueil" id="contactForm" method="post"  accept-charset="UTF-8">
                        <legend class="text-center">Contactez-nous</legend>
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder="Nom Prénom" required>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Email" required>
                        </div>

                        <div class="form-group">
                            <input type="text" id="object" name="object" placeholder="Objet" required>
                        </div>

                        <div class="form-group">
                            <textarea id="message" name="message" placeholder="Message" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="send d-flex justify-content-center">
                            <button name="message-submit" type="submit" id="form-submit" class="btnSend"><span>Envoyer</span></button>
                            <input type="hidden" name="hidden" value="1">
                        </div>
                        <?php

                        if (isset($_GET['send']) && $_GET['send'] === "sent") {
                            echo 'E-mail envoyé';
                        } else if (isset($_GET['send']) && $_GET['send'] === "notSent") {
                            echo 'Problème de serveur';
                        } 
                        else {
                            global $name, $email, $sujet, $message;
                            
                            echo $email;
                        }
                        ?>

                    </form>
                </div>
            </div>
        </div> <!-- begining menu  -->
    </header> <!-- end header -->