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

<body class="page-template-default page page-id-31 init loaded" cz-shortcut-listen="true"><!--  -->
    <main id="main-scrollbar" data-scrollbar="" class="full-height" tabindex="1" style="overflow: hidden; outline: none;">
        <div class="scroll-content" style="transform: translate3d(0px, 0px, 0px);">
            <header></header>
            <div class="veil full fixed" style="top: 0px;"></div>
            <div id="wrapper" class="">
                <div id="header-spacer"></div>
                <section class="three-col parallax  alt on-screen" style="transform: translateY(14.192px);" data-offset="177.39999389648438">
                    <article>
                        <hgroup class="standard">	
                            <h1>Contacteu</h1>
                        </hgroup>
                    </article>	
                    <article>
                        <hgroup class="standard">
                            <h5>Psicologia Multidisciplinària</h5>
                            <p>PsicoExperts Barcelona<br>
                                C/ Comte Borrell 137<br>
                                08015 Barcelona
                            </p>
                        </hgroup>
                    </article>
                    <article>
                        <hgroup class="standard">
                            <h5>Posa't en Contacte</h5>
                            <p>
                                <a href="mailto:info@psicoexpertsbarcelona.com">info@psicoexpertsbarcelona.com</a><br>
                                12 345 67 89
                            </p>
                        </hgroup>
                    </article>
                    <article>
                        <hgroup class="standard">
                            <h5>Enllaços d'Interès</h5>
                            <p>
                                <a href="02_nosaltres.html">Nosaltres</a><br>
                                <a href="05_FAQ.html">FAQ</a>
                            </p>
                        </hgroup>
                    </article>
                </section>
                <section class="form on-screen">
                    <p class="note">Estem ansiosos per escoltar-vos.</p>           
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
                                            <input name="input_4" id="input_3_4" type="text" value="" class="medium" tabindex="4" placeholder="Telèfon" aria-invalid="false">
                                        </div>
                                    </li>
                                    <li id="field_3_5" class="gfield full-width gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                        <label class="gfield_label" for="input_3_5">El teu missatge<span class="gfield_required">*</span></label>
                                        <div class="ginput_container ginput_container_textarea"><textarea name="input_5" id="input_3_5" class="textarea medium" tabindex="5" placeholder="El teu missatge *" aria-required="true" aria-invalid="false" rows="10" cols="50"></textarea>
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