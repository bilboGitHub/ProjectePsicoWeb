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
    require "redirect.php";
?>

<body id="account" class="template-login   init loaded" cz-shortcut-listen="true"><!--  -->
    <main id="main-scrollbar" data-scrollbar="" tabindex="1" style="overflow: hidden; outline: none;" class="">
        <div class="scroll-content" style="transform: translate3d(0px, 0px, 0px);">
            <header></header>
            <div class="veil full fixed" style="top: 0px;"></div>
            <div id="wrapper" class="shopify-wrapper">	
                <section class="three-col  on-screen">
                    <div id="header-spacer"></div>
                    <article>
                        <hgroup class="standard">
                            <h1>El Meu Compte</h1>
                            <!-- <p><span style="font-weight:bold;">If you are a current customer</span> and this is your first visit to our new site, please <a href="#" class="reset-password" style="color:black;">reset your password</a>.</p> -->
                        </hgroup>
                    </article>	
                    <article>
                        <div id="enter-pass">
                            <form method="post" action="07_account.php" id="customer_login" accept-charset="UTF-8">
                                <input type="hidden" name="form_type" value="customer_login">
                                <input type="hidden" name="utf8" value="✓">
                                <hgroup class="standard">
                                    <h5>Pacient</h5>
                                    <p>Accediu al vostre compte a continuació</p>			
                                </hgroup>
                                <input type="email" name="email" id="CustomerEmail" class="" placeholder="Email" spellcheck="false" autocomplete="off" autocapitalize="off" autofocus="">
                                <input type="password" name="contrasenya" id="CustomerPassword" class="" placeholder="Contrasenya">
                                <input type="submit" name="btsignin" class="button" value="Sign In">
                                <!-- <a href="#" class="cta reset small">Reset Password</a> -->
                            </form>

                            <?php

                            if (isset($_POST['btsignin'])) {

                                $error="";         
                                $usuari = new business_usuari();
                                $objusuari = $usuari -> cercarperemail($error, $_POST['email']);

                                if ($error =="") {
                                    if ($objusuari){
                                        if ($objusuari->getcontrasenya_usuari() == $_POST['contrasenya']){
                                            if($objusuari->gettipus_usuari() == 2){
                                                redirect("09_administrador.html");
                                            }
                                            elseif($objusuari->gettipus_usuari() == 1){
                                                redirect("09_doctor.php?id_usuari=". $objusuari->getid_usuari());
                                            }
                                            elseif($objusuari->gettipus_usuari() == 0){
                                                redirect("09_pacient.php?id_usuari=". $objusuari->getid_usuari());
                                            }
                                        }
                                        else{
                                            echo "Contrasenya invalida";
                                        }
                                    }
                                    else{
                                        echo "No existeix Usuari amb aquest Email";   
                                    }
                                }
                                else
                                    echo "ERROR: $error";
                            }

                            ?>                            
                        </div>
                        <!-- <div id="reset-pass" class="hidden">
                            <form method="post" action="/account/recover" accept-charset="UTF-8"><input type="hidden" name="form_type" value="recover_customer_password"><input type="hidden" name="utf8" value="✓">
                                <hgroup class="standard" style="padding-bottom:15px">
                                    <h5>Reset Password</h5>
                                    <p>Shortly after clicking submit, you should receive an email with instructions to create a new password.</p>
                                </hgroup>
                                <label for="email" class="label">Email Address</label>
                                <input type="email" value="" size="30" name="email" id="recover-email" class="large">
                                <input class="btn" type="submit" value="Submit">
                            </form>
                        </div> -->
                    </article>
                    <article>	
                        <hgroup class="standard">
                            <h5>Ets nou a PsicoExperts?</h5>
                            <p>Crea un compte per gaudir dels avantatges.</p>				
                            <p><a href="07_register.php" class="button">Registre</a></p>
                        </hgroup>
                    </article>
                </section>
                <script data-locksmith="">if(Locksmith.state.keys.length > 0){Locksmith.ping()}</script>
                <footer></footer>
            </div>
        </div>
        <div class="scrollbar-track scrollbar-track-x" style="display: none;">
            <div class="scrollbar-thumb scrollbar-thumb-x" style="width: 1474px; transform: translate3d(0px, 0px, 0px);"></div>
        </div>
        <div class="scrollbar-track scrollbar-track-y" style="display: block;">
            <div class="scrollbar-thumb scrollbar-thumb-y" style="height: 169.651px; transform: translate3d(0px, 0px, 0px);"></div>
        </div>
        <canvas class="overscroll-glow" style="display: none; pointer-events: none;"></canvas>
    </main>
</body>