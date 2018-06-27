<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salome-Psicolegs Infanto-juvenil Barcelona</title>
    <link rel="stylesheet" href="css/normalize.css"> 
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">   
    <link rel="stylesheet" href="css/main.css">
</head>

<?php
    // require "/Applications/MAMP/htdocs/ProjectePsicoWeb/Business/business_usuari.php"; //<--apple
    require "../Business/business_usuari.php"; //<--windows
?>

<body  id="create-account" class="template-register   init loaded" cz-shortcut-listen="true"><!--  -->
    <main id="main-scrollbar" data-scrollbar="" tabindex="1" style="overflow: hidden; outline: none;" class="">
        <div class="scroll-content" style="transform: translate3d(0px, 0px, 0px);">
            <header></header>
            <div class="veil full fixed" style="top: 0px;"></div>
            <div id="wrapper" class="shopify-wrapper">	
                <section class="three-col alt on-screen">
                    <div id="header-spacer"></div>
                    <article>
                        <hgroup class="standard">	
                            <h1>Registre</h1>
                        </hgroup>
                    </article>	
                    <article class="double">
                        <hgroup class="standard">
                            <h5>Nou Pacient</h5>
                            <p>Crea un compte per gaudir dels avantatges.</p>			
                        </hgroup>
                        <form method="post" action="07_register.php" id="create_customer" accept-charset="UTF-8">
                            <input type="hidden" name="form_type" value="create_customer">
                            <input type="hidden" name="utf8" value="✓">
                            <!-- <input type="text" name="customer[first_name]" id="FirstName" placeholder="Nom" autofocus="">
                            <input type="text" name="customer[last_name]" id="LastName" placeholder="Cognoms"> -->
                            <input type="email" name="email" id="Email" class="" placeholder="E-mail" value="" spellcheck="false" autocomplete="off" autocapitalize="off">
                            <input type="password" name="contrasenya" id="CreatePassword" class="" placeholder="Contrasenya">
                            <input type="submit" value="Registre" class="btn" name="btInsertar">
                        </form>

                        <?php

                        if (isset($_POST['btInsertar'])) {
                        $error="";         
                        $objusuari = new business_usuari(null, $_POST['email'], $_POST['contrasenya'], 0);
                        
                        $resultat = $objusuari -> insertar($error);

                        // Motrar el resultado de los registro de la base de datos
                            if ($resultat)
                                echo "Registre insertat";
                            else
                                echo "Error en la inserció: $error";   
                        }

                        ?>
                        
                    </article>
                </section>
                <script data-locksmith="">if(Locksmith.state.keys.length > 0){Locksmith.ping()}</script>
                <footer></footer>
            </div>
        </div>
    </main>
</body>