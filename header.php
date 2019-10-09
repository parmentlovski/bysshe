<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="groupe du Haut Doubs">
    <meta name="author" content="Parmentelot Bryan">
    <title>Bysshe Band - Official Website</title>

    <!-- Add css specifiq at this theme -->
    <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body class="container-fluid">

    <header id="header-page">
        <div class="row justify-content-center">
            <div id="content-logo">
                <img src="wp-content/themes/bysshe/assets/img/bysshewhite.png" alt="logo du groupe Bysshe Band" height="1031" width="1181">
            </div>
            <div class="burger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
        <div class="content-menu">
            <div class="row">
                <div class="menu offset-1 col-5">
                    <?php wp_nav_menu(); ?>
                </div>
                <div class="form col-6 d-flex flex-column align-items-center">
                    <form action="#" id="contactForm" method="post" class="">
                        <legend class="text-center">Contactez-nous</legend>
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder="Nom">
                        </div>

                        <div class="form-group">
                            <input type="text" id="object" name="object" placeholder="Objet">
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Email">
                        </div>

                        <!-- <div class="form-group">
                            <input type="text" name="message" id="message" placeholder="Message">
                        </div> -->

                        <div class="form-group">
                            <textarea id="message" name="message" placeholder="Message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="send d-flex justify-content-center">
                            <!-- <input name="message-submit" type="submit" id="form-submit" class="btnSend">
                            <input type="hidden" name="hidden" value="1"> -->
                            <button class="btn-6"><span>Envoyer</span></button>
                        </div>
                        
                        <?php

                        if (isset($_GET['send']) && $_GET['send'] === "sent") {
                            echo 'E-mail envoyé';
                        } else if (isset($_GET['send']) && $_GET['send'] === "notSent") {
                            echo 'Problème de serveur';
                        } ?>

                    </form>
                </div>
            </div>
        </div>
    </header>