<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Marketing Digital">
    <meta name="author" content="Widoski Houndagba">
    <title>Marketing Digital | A Propos</title>

    <!-- font icons -->
    <link rel="stylesheet" href="../vendors/themify-icons/css/themify-icons.css">

    <!-- Bootstrap + Creative Design main styles -->
	<link rel="stylesheet" href="../css/main.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!-- Page Navbar -->
        @include('components.navbar')
    <!-- End of Page Navbar -->   

    <!-- Page Header -->
    <header class="header header-mini-about"> 
      <div class="header-title">A Propos</div> 
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-white text-decoration-underline" href="/">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">A Propos</li>
         </ol>
      </nav>
   </header>
    <!-- End of Page Header -->  
    
    <!-- section -->
    <section>
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="after"></div>
                        <img src="../imgs/img-6.jpg" class="w-100" alt="About Us">
                    </div>
                </div>
                <div class="col-md-5">
                    <h5 class="mb-3 font-weight-bold text-primary">START-UP MARKETING DIGITAL</h5>
                    
                    <p class="text-dark text-justify">
                        C'est une agence de marketing digitale spécialisée dans la promotion en ligne des entreprises. Nous travaillons 
                        avec nos clients pour développer des stratégies efficaces qui augmentent leur visibilité sur internet, génèrent 
                        du trafic qualifié et favorisent la conversion des visiteurs en clients.
                        Notre objectif est de fournir des solutions personnalisées et de maximiser les résultats pour nos clients.
                    </p>
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
            <h2 class="text-center mb-5 text-primary">NOS VALEURS</h2>
            <!-- Row -->
            <div class="row justify-content-between align-items-center">      
                <div class="col-md-4">
                    <div class="second_cards-list">
                        <div class="second_card" >
                            <div class="second_card_image" > <img src="imgs/valeurs_1.jpg" /> </div>
                            <div class="second_card_title title-white" >
                                <p class="bg-primary text-white">Innovation</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="second_cards-list">
                        <div class="second_card" >
                            <div class="second_card_image" > <img src="imgs/valeurs_2.jpg" /> </div>
                            <div class="second_card_title title-white" >
                                <p class="bg-primary text-white">Fiabilité</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="second_cards-list">
                        <div class="second_card" >
                            <div class="second_card_image" > <img src="imgs/valeurs_3.jpg" /> </div>
                            <div class="second_card_title title-white" >
                                <p class="bg-primary text-white">Résultat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End of Row -->           
        </div><!-- End of Container-->      
    </section><!-- End of Section -->

    <!-- Contact Form Section -->
        @include('components.contact-form')
    <!--End of Section -->

    <!-- Section -->
        @include('components.footer')
    <!-- End of Section -->

    <!-- core  -->
    <script src="../vendors/jquery/jquery-3.4.1.js"></script>
    <script src="../vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="../vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Creative Design js -->
    <script src="../js/main.js"></script>

</body>
</html>
