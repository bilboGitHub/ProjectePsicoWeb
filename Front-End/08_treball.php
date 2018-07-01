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
    // require "/Applications/MAMP/htdocs/ProjectePsicoWeb/Business/business_contacte.php"; //<--apple
    require "../Business/business_contacte.php"; //<--windows
?>

<body id="tractamentHeader" class="page-template-default page page-id-31 init loaded" cz-shortcut-listen="true"><!--  -->
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
            <div id="wrapper" class="">
                <div id="header-spacer"></div>
                <section class="text-header on-screen">
                    <!-- <div id="header-spacer"></div> -->
                    <hgroup>
                        <h1>TREBALLEM JUNTS!?</h1>
                    </hgroup>
                    <article>
                        <h2>Busquem</h2>
                        <p>Psicòlegs clínics i psicoterapeutes ubicats a Barcelona, amb un recorregut de més de deu anys de treball en clíniques privades i hospitals públics, així com en serveis de salut mental de Barcelona i rodalies.</p>
                    </article>
                </section>
                <section class="form on-screen">
                    <p class="heading">Creus que tens el que es necessita? Omple el formulari i ens posarem en contacte molt aviat.</p>           
                    <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_3">
                        <form method="post" enctype="multipart/form-data" id="gform_3" action="06_contacte.php">
                            <div class="gform_body">
                                <ul id="gform_fields_3" class="gform_fields top_label form_sublabel_below description_below">  
                                    <li id="field_3_1" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                        <label class="gfield_label" for="input_3_1">Nom<span class="gfield_required">*</span></label>
                                        <div class="ginput_container ginput_container_text">
                                            <input name="input_1" id="input_3_1" type="text" value="" class="medium" maxlength="150" tabindex="1" placeholder="Nom *" aria-required="true" aria-invalid="false">
                                        </div>
                                    </li>
                                    <li id="field_3_2" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                        <label class="gfield_label" for="input_3_2">Cognoms<span class="gfield_required">*</span></label>
                                        <div class="ginput_container ginput_container_text">
                                            <input name="input_2" id="input_3_2" type="text" value="" class="medium" tabindex="2" placeholder="Cognoms *" aria-required="true" aria-invalid="false">
                                        </div>
                                    </li>
                                    <li id="field_3_3" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                        <label class="gfield_label" for="input_3_3">Email<span class="gfield_required">*</span></label>
                                        <div class="ginput_container ginput_container_email">
                                            <input name="input_3" id="input_3_3" type="text" value="" class="medium" tabindex="3" placeholder="Email *" aria-required="true" aria-invalid="false">
                                        </div>
                                    </li>
                                    <li id="field_3_4" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
                                        <label class="gfield_label" for="input_3_4">Telèfon</label>
                                        <div class="ginput_container ginput_container_phone">
                                            <input name="input_4" id="input_3_4" type="text" value="" class="medium" tabindex="4" placeholder="Telèfon *" aria-invalid="false">
                                        </div>
                                    </li>
                                    <li id="field_2_7" class="gfield full-width gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below gfield_visibility_visible">
                                        <label>El teu missatge</label>
                                    </li>
                                    <li id="field_3_5" class="gfield full-width gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                        <label class="gfield_label" for="input_3_5"><span class="gfield_required">*</span></label>
                                        <div class="ginput_container ginput_container_textarea"><textarea name="input_5" id="input_3_5" class="textarea medium" tabindex="5" placeholder="" aria-required="true" aria-invalid="false" rows="10" cols="50"></textarea>
                                        </div>
                                    </li>
                                    <li id="field_3_6" class="gfield full-width centered field_sublabel_below field_description_below gfield_visibility_visible">
                                        <label class="gfield_label" for="input_3_6">CAPTCHA</label>
                                        <div id="input_3_6" class="ginput_container ginput_recaptcha" data-sitekey="6LeSVVUUAAAAAITk_KOdtllsbrACik7_LT0rMFqj" data-theme="light" data-tabindex="6">
                                            <div style="width: 304px; height: 78px;">
                                                <div>
                                                    <iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeSVVUUAAAAAITk_KOdtllsbrACik7_LT0rMFqj&amp;co=aHR0cHM6Ly9jZXJlbW9ueWNvZmZlZS5jb206NDQz&amp;hl=en&amp;v=v1528855115741&amp;theme=light&amp;size=normal&amp;cb=xbtdhy5nnuv0" width="304" height="78" role="presentation" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" tabindex="6"></iframe>
                                                </div>
                                                <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="gform_footer top_label">
                                <input type="submit" id="gform_submit_button_3" class="gform_button button" value="Enviar" name="btInsertar" tabindex="7" onclick="if(window[&quot;gf_submitting_3&quot;]){return false;}  window[&quot;gf_submitting_3&quot;]=true;  " onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_3&quot;]){return false;} window[&quot;gf_submitting_3&quot;]=true;  jQuery(&quot;#gform_3&quot;).trigger(&quot;submit&quot;,[true]); }"> 
                                <input type="hidden" class="gform_hidden" name="is_submit_3" value="1">
                                <input type="hidden" class="gform_hidden" name="gform_submit" value="3">               
                                <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
                                <input type="hidden" class="gform_hidden" name="state_3" value="WyJbXSIsImY3MGU3NzlkZWFjNzZkODBmN2ZmMWEwMWQ4MjljNjEyIl0=">
                                <input type="hidden" class="gform_hidden" name="gform_target_page_number_3" id="gform_target_page_number_3" value="0">
                                <input type="hidden" class="gform_hidden" name="gform_source_page_number_3" id="gform_source_page_number_3" value="1">
                                <input type="hidden" name="gform_field_values" value="">            
                            </div>
                        </form>
                        
                        <?php

                        if (isset($_POST['btInsertar'])) {
                        $error="";         
                        $objcontacte = new business_contacte(null, $_POST['input_1'], $_POST['input_2'], $_POST['input_3'], null, $_POST['input_4'], $_POST['input_5']);
                        
                        $resultat = $objcontacte -> insertar($error);

                        // Motrar el resultado de los registro de la base de datos
                            if ($resultat)
                                echo "Registre insertat";
                            else
                                echo "Error en la inserció: $error";   
                        }

                        ?>

                    </div>
                    <script type="text/javascript"> if(typeof gf_global == 'undefined') var gf_global = {"gf_currency_config":{"name":"U.S. Dollar","symbol_left":"$","symbol_right":"","symbol_padding":"","thousand_separator":",","decimal_separator":".","decimals":2},"base_url":"https:\/\/ceremonycoffee.com\/wp-content\/plugins\/gravityforms","number_formats":[],"spinnerUrl":"https:\/\/ceremonycoffee.com\/wp-content\/plugins\/gravityforms\/images\/spinner.gif"};jQuery(document).bind('gform_post_render', function(event, formId, currentPage){if(formId == 3) {jQuery('#input_3_1').textareaCount(    {    'maxCharacterSize': 150,    'originalStyle': 'ginput_counter',	 'truncate': true,	 'errorStyle' : '',    'displayFormat' : '#input of #max max characters'    } );if(typeof Placeholders != 'undefined'){
                        Placeholders.enable();
                        }jQuery('#input_3_4').mask('(999) 999-9999').bind('keypress', function(e){if(e.which == 13){jQuery(this).blur();} } );} } );jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit){} ); </script>
                    <script type="text/javascript"> jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [3, 1]) } ); </script>
                </section>		
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