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
    // require "/Applications/MAMP/htdocs/ProjectePsicoWeb/Business/business_FAQ.php"; //<--apple
    require "../Business/business_FAQ.php"; //<--windows
	
   	$business_FAQ = new business_FAQ();
   	$arrayFAQ = $business_FAQ-> selectFAQ();
?>

<body id="tractamentHeader" class="page-template-default page page-id-272 init loaded" cz-shortcut-listen="true"><!--  -->
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
                <section class="three-col parallax  alt on-screen" style="transform: translateY(14.2426px);" data-offset="178.03199768066406">
                    <article>
                        <hgroup class="standard">	
                            <h1>FAQ</h1>
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
                                <a href="06_contacte.php">Ubicació</a><br>
                                <a href="04_blog.html">Blog</a>
                            </p>
                        </hgroup>
                    </article>
                </section>
                <section class="text-list on-screen">
                    <!-- <article>
                        <h2>M'acabo de separar, he de portar el meu fill a un psicòleg?</h2>
                        <p>El fet de separar-se no és “motiu suficient” com per a acudir a un professional de la psicologia, però tampoc és una cosa descartable, sobretot si queden aspectes no tractats, explicitats o parlats prou amb el vostre fill, o bé perquè són difícils d’abordar o bé perquè no es troba la manera de fer-ho. Creiem que pot ser convenient parlar amb un especialista dels esdeveniments vitals pels quals transiten els nens, sobretot, si els pares entenen que poden estar en una situació de risc. Per a més informació, consulteu Psicòleg infantil Barcelona.</p>
                    </article>
                    <article>
                        <h2>Som pares adoptius o d'acollida, i tenim algunes qüestions que no sabem com plantejar-nos. Ens podeu ajudar?</h2>
                        <p>Per descomptat, partint de que cada situació és diferent, hi ha molts factors importants a tenir en compte tant en famílies d’adopció com a les d’acollida, i una orientació en aquests casos pot ser útil per a tota la família ja que pot desbloquejar problemes de difícil solució. Per a més informació, consulteu Psicòleg infantil Barcelona.</p>
                    </article>
                    <article>
                        <h2>La nostra família és reconstruïda, i crec que el meu fill ho està passant malament, he de consultar?</h2>
                        <p>En el moment en què notem, percebem o tenim clar que el nostre fill no està passant per un bon moment, hem de ser francs amb nosaltres mateixos i pensar seriosament la posibilitat de sol·licitar la valoració d’un especialista. Hi ha situacions en la vida que encara que semblin banals tenen un gran impacte per a subjectes en ple desenvolupament, que a més no tenen els mateixos recursos que nosaltres, els adults, per explicar certes coses. En definitiva és preferible abordar a temps segons quines qüestions abans de passar a majors. Per a més informació, consulteu Psicòleg infantil Barcelona.</p>
                    </article>
                    <article>
                        <h2>Som pares gais, hauria el nostre fill d’anar a teràpia?</h2>
                        <p>Doncs no hi ha perquè inquietar-se si el vostre fill no pateix símptomes que li causin gran malestar. El fet que els seus pares siguin o no siguin gais no és relació causa-efecte de psicopatologia en els fills, però com que no hi ha subjecte lliure de símptomes ni angoixa, sempre recomanem en qualsevol conjuntura familiar, consultar amb un especialista quan alguns símptomes apareixen o es resisteixen i ens serveixen d’alarma indicant que alguna cosa no va bé. Per a més informació, consulteu Psicòleg infantil Barcelona.</p>
                    </article> -->
                    <!-- <article>
                        <h2>A casa estem passant per un mal moment, què podem fer?</h2>
                        <p>Nosaltres sempre diem el mateix, no hi ha perquè aguantar, esperar o mirar a una altra banda, això sempre complica encara més les coses i no es perd res per consultar i veure què passa. Un després sempre tria i decideix amb això, un pot decidir seguir endavant, fins on les seves forces li portin i altres en canvi, la seva decisió pot ser la de resoldre el malestar pel qual consulta i aturar-se aquí. Per a més informació, consulteu Psicòleg infantil Barcelona.</p>
                    </article> -->

                    <?php  
                        $error="";
                        $business_FAQ = new business_FAQ();
                        $arrayFAQ = $business_FAQ-> Llistar($error); //<--- problema:Uncaught ArgumentCountError

                        if ($error=="") {
                            // echo "<table border='2'>";
                            // echo "<tr>";
                            // echo "<th>ID</th>";
                            // echo "<th>PREGUNTA</th>";
                            // echo "<th>RESPOSTA</th>";
                            // echo "<th>CATEGORIA</th>";
                            // echo "<th>DATA</th>";
                            // echo "</tr>";

                            if($arrayFAQ) {
                                foreach ($arrayFAQ as $faq) {
                                    // echo "<tr>";
                                    // echo "<td>" . $faq->getId_FAQ()."</td>";
                                    // echo "<td>" . $faq->getPregunta_FAQ(). "</td>";
                                    // echo "<td>" . $faq->getResposta_FAQ(). "</td>";
                                    // echo "<td>" . $faq->getCategoria_FAQ(). "</td>";
                                    // echo "<td>" . $faq->getData_FAQ(). "</td>";
                                    // echo "</tr>";
                                    echo "<article>";
                                    echo "<h2>" . $faq->getPregunta_FAQ(). "</h2>";
                                    echo "<p>" . $faq->getResposta_FAQ(). "</p>";
                                    echo "</article>";
                                }
                            }
                            // echo "</table>";
                        }
                        else
                            echo "ERRO: $error";                  
                    ?>

                    <article class="last">
                        <h2>El meu fill no és normal si té alguna cosa d'això?</h2>
                        <p>No hi ha cap subjecte lliure de símptoma. No existeix la suposada normalitat i la franja que divideix patologia de “normalitat” és de vegades molt difusa. Tot i això, si teniu dubtes, esteu angoixats o simplement preocupats per algun motiu, podeu realitzat una consulta. No ens cansem de repetir que tot és molt més sa quan es pot dialogar, conversar i quan es dóna peu a obrir preguntes i qüestions sobre assumptes que potser mai haguéssim pensat que eren de major transcendència. Per a més informació, consulteu Psicòleg infantil Barcelona.</p>
                    </article>
                </section>
                <footer></footer>
            </div>
        </div>
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




