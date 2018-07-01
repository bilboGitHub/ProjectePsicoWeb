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

<body id="account tractamentHeader" class="template-login   init loaded" cz-shortcut-listen="true"><!--  -->
    <main>
        <div class="scroll-content">
            <header class="global fixed" style="top: 0px;"> <!-- tot el navbar -->
                <nav class="global"> <!-- tot el navbar -->
                    <ul class="main left"> <!-- navbar a l'esquerra amb 5 a --> 
                        <!--<li>
                            <a href="home.html">INICI</a>  torna a inici
                        </li> -->
                        <li>
                            <a id="showTractament" href="">TRACTAMENT</a> <!-- llista de tractament -->
                        </li>
                        <li>
                            <a href="02_nosaltres.html">NOSALTRES</a> <!-- filosofia/com treballem/equip -->
                        </li>
                        <li>
                            <a href="04_blog.html">BLOG</a> <!-- afegir article amb PHP/articles(imatge+foto+titol+text)amb m'agrada, comentaris, visualitzacions/article amb share+related posts i contacte-->
                        </li>                
                        <li>
                            <a href="tel:123456789">
                                <i class="fas fa-phone"></i>
                                <span class="number">12 345 67 89</span>
                            </a>
                        </li> 
                    </ul>

                    <a href="../home.html" class="logo"> <!-- logo central -->
                        <h1 class="lletraLogo">PSICOEXPERTS</h1> <!-- marca -->
                        <span>BARCELONA PSICOLEGS</span> <!-- leitmotive -->
                    </a>

                    <ul class="main right"> <!-- navbar a l'esquerra amb 3 a -->          
                        <li>
                            <a href="06_contacte.php">CONTACTE/ADREÇA</a> <!-- formulari(CMS-PHP)/contacte(tipus xat)/ -->
                        </li>
                        <li>
                            <a href="05_FAQ.php">FAQ</a> <!-- afegir pregunta i resposta amb PHP/preguntes frequents -->
                        </li>
                        <li>
                            <a href="07_account.php">ACCOUNT</a> <!-- cites(PHP)/missatges(PHP)/resultats(PHP) -->
                        </li>
                        <li>
                            <a href="#">LLENGUA</a> <!-- catala/castella/frances -->
                        </li>            
                    </ul>
                    <div id="mobile-toggle" style="color: white">
                        <i class="icon icon-menu fas fa-bars"></i>
                        <i class="icon icon-cancel fas fa-times"></i>
                    </div>
                </nav>
                <div id="mobile-menu" class="" data-scrollbar="" tabindex="1" style="overflow: hidden; outline: none;">
                    <div class="scroll-content"> <!-- style="transform: translate3d(0px, 0px, 0px);" -->
                        <ul>
                            <li class="jordiExpand parent shop-btn menu-item menu-item-type-custom menu-item-object-custom menu-item-342">
                                <a rel="shop" href="#">TRACTAMENTS</a>
                                <ul id="cats" class="">
                                    <li> <a href="03_infantil.html">Psicòleg Infantil</a></li>
                                    <li> <a href="03_adolescents.html">Psicòleg Adolescents</a></li>
                                    <li> <a href="03_adults.html">Psicòleg Adults</a></li>
                                    <li> <a href="03_parelles.html">Psicòleg Parelles</a></li>                                    
                                </ul>
                            </li>
                            <li id="menu-item-459" class="jordiExpand parent menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-459"><a href="#">ALTRES</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-460" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-460"><a href="08_treball.php">TREBALL</a></li>
                                    <li id="menu-item-456" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-456"><a href="08_privacitat.html">PRIVACITAT</a></li>
                                    <li id="menu-item-455" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-455"><a href="#">LLENGUA</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-184">
                                <a href="02_nosaltres.html">NOSALTRES</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-185">
                                <a href="04_blog.html">BLOG</a>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-344">
                                <a href="07_account.php">CONTACTE/ADREÇA</a>
                            </li>
                            <li class="last menu-item menu-item-type-custom menu-item-object-custom menu-item-188">
                                    <a href="05_FAQ.php">FAQ</a>
                                </li>
                            <li class="last menu-item menu-item-type-custom menu-item-object-custom menu-item-188">
                                <a href="07_account.php">ACCOUNT</a>
                            </li>
                        </ul>	
                    </div>
                </div>
                <div class="veil"></div>
                <a href="tel:123456789" class="telephone">
                    <i class="fas fa-phone"></i>
                    <span class="number">12 345 67 89</span>
                </a>
                <nav class="drop" id="shop"> <!-- class="drop shown" -->
                    <div class="left container first white" style="padding-top: 120px;">
                        <ul id="cats" class="">
                            <li class="menu-item-has-children">
                                <ul class="sub-menu">
                                    <li> <a href="03_infantil.html">Psicòleg Infantil</a></li>
                                    <li> <a href="03_adolescents.html">Psicòleg Adolescents</a></li>
                                    <li> <a href="03_adults.html">Psicòleg Adults</a></li>
                                    <li> <a href="03_parelles.html">Psicòleg Parelles</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="container right gray last" style="padding-top: 120px;">
                        <figure class="card small top">
                            <figcaption style="color: white">
                                <span class="label">Psicòleg</span>
                                <h3>Infantil</h3>
                                <p>Trastorns de l’aprenentatge...</p>
                            </figcaption>
                            <a href="03_infantil.html" class="target"></a>
                            <img src="imatges/janko-ferlic-284664-unsplash(1).jpg" style="display: block;">	                                      
                        </figure>
                        <figure class="card small top ">
                            <figcaption style="color: white">
                                <span class="label">Psicòleg</span>
                                <h3>Adolescents</h3>
                                <p>“No m’agrada res, no sé què fer…”</p>
                            </figcaption>
                            <a href="03_adolescents.html" class="target"></a>
                            <img src="imatges/sharon-mccutcheon-558221-unsplash(1).jpg" style="display: block;">                                               
                        </figure>
                        <figure class="card small top">
                            <figcaption style="color: white">
                                <span class="label">Psicòleg</span>
                                <h3>Adults</h3>
                                <p>Has estat diagnosticat de …?</p>
                            </figcaption>
                            <a href="03_adults.html" class="target"></a>
                            <img src="imatges/simon-wijers-37854-unsplash(1).jpg" style="display: block;">                                             
                        </figure>
                    </div>		
                </nav>
            </header>
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
                <footer class="global">
                    <nav class="global">
                        <ul class="main">
                            <li id="menu-item-366" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-366">
                                <span>TRACTAMENTS</span>
                                <ul class="sub-menu">
                                    <li id="menu-item-79" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-79">
                                        <a href="03_infantil.html">Psicòleg Infantil</a>
                                    </li>
                                    <li id="menu-item-80" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-80">
                                        <a href="03_adolescents.html">Psicòleg Adolescents</a>
                                    </li>
                                    <li id="menu-item-81" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-81">
                                        <a href="03_adults.html">Psicòleg Adults</a>
                                    </li>
                                    <li id="menu-item-574" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-574">
                                        <a href="03_parelles.html">Psicòleg Parelles</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-66" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-66">
                                <span>TREBALLS</span>
                                <ul class="sub-menu">
                                    <li id="menu-item-322" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-322">
                                        <a href="08_treball.php">Vols Treballar amb Nosaltres?!</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-69" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-69">
                                <span>About</span>
                                <ul class="sub-menu">
                                    <li id="menu-item-218" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-218">
                                        <a href="02_nosaltres.html">El Despatx</a>
                                    </li>
                                    <li id="menu-item-277" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-277">
                                        <a href="05_FAQ.php">FAQ</a>
                                    </li>
                                    <li id="menu-item-654" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-654">
                                        <a href="08_privacitat.html">Política de Privacitat</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-72" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-72">
                                <span>ADREÇA</span>
                                <ul class="sub-menu">
                                    <li id="menu-item-268" class="menu-item menu-item-type-post_type menu-item-object-location menu-item-268">
                                        <a href="06_contacte.php" class="_" >C/ Comte Borrell 137<br>08015 Barcelona<br>Catalunya</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>		
                    </nav>
                    <nav class="esquerra">
                        <ul class="main">
                            <li>
                                <span>XARXES</span>
                                <ul>
                                    <li>
                                        <a href="https://twitter.com">Twitter</a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com">Facebook</a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com">Youtube</a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/">Linkedin</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <aside class="xarxessocials">
                        <ul>
                            <li>
                                <span>Xarxes Socials</span>
                            </li>
                            <li>
                                <a href="https://twitter.com" class="icon icon-twitter"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com" class="icon icon-facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.youtube.com" class="icon icon-instagram"><i class="fab fa-youtube"></i></a>
                                <a href="https://www.linkedin.com/" class="icon icon-instagram"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </aside>
                    <a href="../Home.html" class="logo">
                        <!-- <img src="" style="display: inline-block;"> -->
                        <h1 class="lletraLogo">PSICOEXPERTS</h1>
                        <span>BARCELONA PSICOLEGS — ©2018</span>
                    </a>
                    <h2 id="missatgeFooter">LA PSICOLOGIA ET POT CANVIAR LA VIDA.</h2>			
                    <!-- <img src="" id="tagline" style="display: block;">		 -->
                </footer> 
            </div>
        </div>
        <!-- <div class="scrollbar-track scrollbar-track-x" style="display: none;">
            <div class="scrollbar-thumb scrollbar-thumb-x" style="width: 1474px; transform: translate3d(0px, 0px, 0px);"></div>
        </div>
        <div class="scrollbar-track scrollbar-track-y" style="display: block;">
            <div class="scrollbar-thumb scrollbar-thumb-y" style="height: 169.651px; transform: translate3d(0px, 0px, 0px);"></div>
        </div>
        <canvas class="overscroll-glow" style="display: none; pointer-events: none;"></canvas> -->
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>
    <script src="js/transformar.js"></script>
</body>