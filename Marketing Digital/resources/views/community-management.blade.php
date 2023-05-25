<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Marketing Digital">
    <meta name="author" content="Widoski Houndagba">
    <title>Marketing Digital | Community Management</title>

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
    <header class="header header-mini-1"> 
      <div class="header-title">Community management</div> 
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-white text-decoration-underline" href="/">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Community management</li>
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
                        <img src="../imgs/img-7.jpg" class="w-100" alt="About Us">
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="after right"></div>
                        <img src="../imgs/img-8.jpg" class="w-100" alt="About Us">
                    </div>  
                </div>
            </div>
            <!-- End of Row -->
            <p class="text-dark text-center mt-5 display-5">
                Optimisez votre présence en ligne et engagez votre audience avec notre service de community management professionnel, 
                pour développer une communauté fidèle et prospère autour de votre marque.
            </p>
        </div>  
        <!-- End of Container -->
    </section><!-- End of Section --> 

    <!-- section -->
    <section>
        <!-- Container -->
        <div class="container">
            <h2 class="text-center text-primary mb-5">NOS OFFRES</h2>
            <!-- row -->
            <div class="row justify-content-between align-items-center">
                <div class="col-md-12">
                    <div class='pricing_container'>
                        <!-- Card 1 -->
                        <div class='pricing_card'>
                            <div class='pricing_card__info'>
                            <h2 class='pricing_card__name'>BASIC</h2>
                            <p class='pricing_card__price' style='color: var(--color05)'>$19.99 <span class='pricing_card__priceSpan'>/month</span></p>
                            </div>
                            <div class='pricing_card__content' style='border-color: var(--color05)'>
                            <div class='pricing_card__rows'>
                                <p class='pricing_card__row'>5GB Disk Space</p>
                                <p class='pricing_card__row'>10 Domain Names</p>
                                <p class='pricing_card__row'>5 E-Mail Address</p>
                                <p class='pricing_card__row'>50GB Monthly Bandwidth</p>
                                <p class='pricing_card__row'>Fully Support</p>
                            </div>
                            <a href='#emptyLink' class='pricing_card__link' style='background-color: var(--color02)'>PURCHASE</a>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class='pricing_card'>
                            <div class='pricing_card__info'>
                            <h2 class='pricing_card__name'>STANDARD</h2>
                            <p class='pricing_card__price' style='color: var(--color06)'>$29.99 <span class='pricing_card__priceSpan'>/month</span></p>
                            </div>
                            <div class='pricing_card__content' style='border-color: var(--color06)'>
                            <div class='pricing_card__rows'>
                                <p class='pricing_card__row'>10GB Disk Space</p>
                                <p class='pricing_card__row'>20 Domain Names</p>
                                <p class='pricing_card__row'>10 E-Mail Address</p>
                                <p class='pricing_card__row'>100GB Monthly Bandwidth</p>
                                <p class='pricing_card__row'>Fully Support</p>
                            </div>
                            <a href='#emptyLink' class='pricing_card__link' style='background-color: var(--color06)'>PURCHASE</a>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class='pricing_card'>
                            <div class='pricing_card__info'>
                            <h2 class='pricing_card__name'>PREMIUM</h2>
                            <p class='pricing_card__price' style='color: var(--color12)'>$49.99 <span class='pricing_card__priceSpan'>/month</span></p>
                            </div>
                            <div class='pricing_card__content' style='border-color: var(--color07)'>
                            <div class='pricing_card__rows'>
                                <p class='pricing_card__row'>50GB Disk Space</p>
                                <p class='pricing_card__row'>50 Domain Names</p>
                                <p class='pricing_card__row'>20 E-Mail Address</p>
                                <p class='pricing_card__row'>300GB Monthly Bandwidth</p>
                                <p class='pricing_card__row'>Fully Support</p>
                            </div>
                            <a href='#emptyLink' class='pricing_card__link' style='background-color: var(--color04)'>PURCHASE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Row -->
        </div>  
        <!-- End of Container -->
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
