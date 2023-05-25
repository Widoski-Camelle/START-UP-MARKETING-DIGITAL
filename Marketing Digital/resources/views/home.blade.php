<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Marketing Digital">
    <meta name="author" content="Widoski Houndagba">
    <title>Marketing Digital</title>

    <!-- font icons -->
    <link rel="stylesheet" href="./vendors/themify-icons/css/themify-icons.css">

    <!-- Bootstrap + Creative Design main styles -->
	<link rel="stylesheet" href="./css/main.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!-- Page Navbar -->
        @include('components.navbar')
    <!-- End of Page Navbar -->   

    <!-- Page Header -->
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content">
            <!-- <p>Lorem ipsum dolor sit amet.</p> --> 
            <h2>DOMINEZ VOTRE SECTEUR AVEC <br><b>NOS STRATEGIES NUMERIQUES</b></h2> 
            <button class="btn btn-outline-light">Etre rappelé</button> 
            <button class="btn btn-outline-light">Démarrer la collaboration</button> 
        </div>      
    </header><!-- End of Page Header -->    

    <!-- section -->
    <section>
        <!-- Container -->
        <div class="container">
            <h2 class="text-center mb-5 text-dark">DECOUVREZ NOS SERVICES</h2>
            <!-- row -->
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="after"></div>
                        <img src="./imgs/img-1.jpg" class="w-100" alt="About Us">
                    </div>
                </div>
                <div class="col-md-5">
                    <h3 class="mb-3 font-weight-bold text-primary">COMMUNITY MANAGEMENT</h3>
                    
                    <p class="text-dark text-justify">
                        Maximisez l'impact de votre marque en ligne : <br>
                        Notre équipe expérimentée de community managers vous aidera à construire et à entretenir une
                        communauté engagée autour de votre marque, augmentant ainsi votre visibilité, votre portée et
                        votre influence sur les réseaux sociaux.
                    </p>
                    <!-- <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, amet!</p> -->
                    <button class="btn btn-outline-primary btn-sm" onclick="window.location.href='/services/community-management';">En savoir plus</button>
                    <button class="btn btn-outline-primary btn-sm">Devis rapide</button>
                </div>
            </div>
            <!-- End of Row -->
        </div>  
        <!-- End of Container -->
    </section><!-- End of Section -->   

    <!-- section -->
    <section>
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row justify-content-between align-items-center">                
                <div class="col-md-5">
                    <h3 class="mb-3 font-weight-bold text-primary">PUBLICITE FACEBOOK GOOGLE TIKTOK INSTAGRAM</h3>
                    <p class="text-dark text-justify">
                        Maximisez votre retour sur investissement publicitaire : <br>
                        Notre équipe de spécialistes en publicité digitale utilise des stratégies éprouvées et des 
                        techniques avancées pour optimiser vos campagnes sur chaque plateforme. Nous nous concentrons 
                        sur l'optimisation de vos dépenses publicitaires, l'augmentation du trafic qualifié et la 
                        conversion des prospects en clients, afin de maximiser votre retour sur investissement.
                    </p>
                    <!-- <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, amet!</p> -->
                    <button class="btn btn-outline-primary btn-sm" onclick="window.location.href='/services/publicite';">En savoir plus</button>
                    <button class="btn btn-outline-primary btn-sm">Devis rapide</button>
                </div>
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="after right"></div>
                        <img src="./imgs/img-2.jpg" class="w-100" alt="About Us">
                    </div>                      
                </div>
            </div><!-- End of Row -->           
        </div><!-- End of Container-->      
    </section><!-- End of Section -->

    <!-- section -->
    <section>
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="after"></div>
                        <img src="./imgs/img-5.jpg" class="w-100" alt="About Us">
                    </div>
                </div>
                <div class="col-md-5">
                    <h3 class="mb-3 font-weight-bold text-primary">AUDIT SITE WEB / RESEAUX SOCIAUX</h3>
                    
                    <p class="text-dark text-justify">
                        Identifiez les lacunes et exploitez le potentiel inexploité : <br>
                        Notre service d'audit de site web et réseaux sociaux vous permet de découvrir les points faibles 
                        de votre présence en ligne, ainsi que les opportunités inexploitées. Grâce à notre analyse approfondie, 
                        nous vous fournirons des recommandations stratégiques personnalisées pour optimiser votre site web et 
                        vos plateformes sociales, afin d'atteindre vos objectifs et d'accroître votre visibilité en ligne.
                    </p>
                    <!-- <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, amet!</p> -->
                    <button class="btn btn-outline-primary btn-sm" onclick="window.location.href='/services/audit';">En savoir plus</button>
                    <button class="btn btn-outline-primary btn-sm">Devis rapide</button>
                </div>
            </div>
            <!-- End of Row -->
        </div>  
        <!-- End of Container -->
    </section><!-- End of Section -->

    <!-- section -->
    <section>
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row justify-content-between align-items-center">                
                <div class="col-md-5">
                <h3 class="mb-3 font-weight-bold text-primary">DEVELOPPEMENT WEB</h3>
                    <p class="text-dark text-justify">
                        Une présence en ligne qui convertit : <br>
                        Nous comprenons l'importance de la conversion pour votre entreprise. C'est pourquoi nous nous efforçons 
                        de créer des sites web qui attirent et convertissent les visiteurs en clients. Grâce à une optimisation 
                        minutieuse, une architecture intuitive et des appels à l'action convaincants, nous vous aidons à maximiser 
                        votre impact en ligne et à stimuler la croissance de votre activité.
                    </p>
                    <!-- <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, amet!</p> -->
                    <button class="btn btn-outline-primary btn-sm" onclick="window.location.href='/services/developpement-web';">En savoir plus</button>
                    <button class="btn btn-outline-primary btn-sm">Devis rapide</button>
                </div>
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="after right"></div>
                        <img src="./imgs/img-3.jpg" class="w-100" alt="About Us">
                    </div>                      
                </div>
            </div><!-- End of Row -->           
        </div><!-- End of Container-->      
    </section><!-- End of Section -->

    <!-- section -->
    <section>
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="after"></div>
                        <img src="./imgs/img-4.jpg" class="w-100" alt="About Us">
                    </div>
                </div>
                <div class="col-md-5">
                    <h3 class="mb-3 font-weight-bold text-primary">CONCEPTION GRAPHIQUE</h3>
                    
                    <p class="text-dark text-justify">
                        Des designs créatifs et percutants qui captivent votre audience : <br>
                        Notre équipe de concepteurs graphiques talentueux est specialisée dans la création de designs visuellement 
                        attrayants qui reflètent l'identité de votre marque. Que ce soit pour la conception de logos, d'éléments 
                        graphiques, d'infographies ou d'interfaces utilisateur, nous mettons tout en oeuvre pour captiver votre 
                        audience et vous démarquer de la concurrence.
                    </p>
                    <!-- <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, amet!</p> -->
                    <button class="btn btn-outline-primary btn-sm" onclick="window.location.href='/services/conception-graphique';">En savoir plus</button>
                    <button class="btn btn-outline-primary btn-sm">Devis rapide</button>
                </div>
            </div>
            <!-- End of Row -->
        </div>  
        <!-- End of Container -->
    </section><!-- End of Section -->   

    <!-- Section -->
    <section class="has-bg-img text-center text-light height-auto" style="background-image: url(./imgs/bg-img-2.jpg)">
        <h3>DEMARREZ UNE COLLABORATION AVEC NOUS, NE LAISSEZ PAS VOTRE POTENTIEL EN LIGNE INEXPLOITE</h3>
    </section><!-- End of Section -->


    <!-- Contact Form Section -->
        @include('components.contact-form')
    <!--End of Section -->

    <!-- Footer Section -->
        @include('components.footer')
    <!-- End of Section -->

    <!-- core  -->
    <script src="./vendors/jquery/jquery-3.4.1.js"></script>
    <script src="./vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="./vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Creative Design js -->
    <script src="./js/main.js"></script>

</body>
</html>
