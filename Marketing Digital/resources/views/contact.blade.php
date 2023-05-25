<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Marketing Digital">
    <meta name="author" content="Widoski Houndagba">
    <title>Marketing Digital | Contact</title>

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
    <header class="header header-mini-contact"> 
      <div class="header-title">Contact</div> 
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-white text-decoration-underline" href="/">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
         </ol>
      </nav>
   </header>
    <!-- End of Page Header -->    

    <!-- Contact Section -->
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
