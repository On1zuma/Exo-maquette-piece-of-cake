<?php
   if ($_SERVER["REQUEST_METHOD"] === "POST") {
       $name = $_POST["name"] ?? "";
       $email = $_POST["email"] ?? "";
       $message = $_POST["message"] ?? "";
   
       if (empty($name) || empty($email) || empty($message)) {
           $error_message = "Tous les champs sont obligatoires !";
       } else {
           header("Location: /message-confirmation.php?name=" . urlencode($name) . "&email=" . urlencode($email) . "&message=" . urlencode($message));
           exit;
       }
   }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <link href="style.css" rel="stylesheet">
      <title>Piece of Cake - Accueil</title>
   </head>
   <body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg bg-body-white">
         <div class="container-fluid">
            <a class="navbar-brand" href="/"><img class="logo" src="/images/logo.jpg" /></a>
         </div>
      </nav>
      <!-- Hero -->
      <header class="container-fluid hero">
         <div class="container col-xxl-10 py-5">
            <div class="row align-items-center g-lg-5 py-5">
               <div class="col-lg-6 text-center text-lg-start text-white d-lg-flex green-card-bg">
                  <image src="/images/icons/birthday.png" class="balloon" alt="balloon" />
                  <div>
                     <h1 class="h5 fw-semibold lh-1 mb-1 mt-lg-0">UN EVENEMENT A ORGANISER ?</h1>
                     <p class="col-lg-10 h1 fw-bold">Nos professionnels s'occupent de tout !</p>
                  </div>
               </div>
               <div class="col-md-10 mx-auto col-lg-4 mt-3 mt-lg-5">
                  <form class="p-4 rounded-1 border bg-light text-light-emphasis" method="post">
                     <p class="text-center fw-bold h4 mb-5 text-secondary">Organiser un évènement</p>
                     <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control custom-form-boder-color" id="floatingInput" placeholder="Nom & Prénom">
                        <label for="floatingInput">Nom & Prénom</label>
                     </div>
                     <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control custom-form-boder-color" id="floatingPassword" placeholder="Adresse email">
                        <label for="floatingPassword">Adresse email</label>
                     </div>
                     <div class="form-floating mb-3">
                        <textarea class="form-control custom-form-boder-color" name="message" rows="3" id="floatingInput"></textarea>            
                        <label for="floatingPassword">Message</label>
                     </div>
                     <?php if (!empty($error_message)) : ?>
                     <div class="alert alert-danger" role="alert">
                        <?php echo $error_message; ?>
                     </div>
                     <?php endif; ?>
                     <button class="w-100 btn btn-lg btn-primary mb-3 not-rounded green-btn-bg" type="submit" aria-label="Organiser un événement">Organiser</button>
                  </form>
               </div>
            </div>
         </div>
      </header>
      <!-- Row -->
      <section class="my-5 row-data">
         <div class="row">
            <div class="col-sm custom-row-info">
               <p>Rdipiscing nec, ultricies sed, dolor. Elementum ultrices diam.</p>
               <div class="custom-badge">
                  <div class="badge-size">
                     <p class="badge-top">In arcus</p>
                     <p class="badge-bottom">Cursus euismod</p>
                  </div>
               </div>
            </div>
            <div class="col-sm card-organization">
               <image src="/images/icons/calendar.png" class="row-icon" alt="balloon" />
               <p>Lorem ipsum dolor sit amet, 
                  consectetur adipiscing.
                  Sed non risus. Suspendisse lectus tortor,
                  dignissim.
                  Sed non risus. Suspendisse lectus tortor,
                  dignissim.
               </p>
               <a href="#" class="to-know">En savoir +</a>          
            </div>
            <div class="col-sm card-organization">
               <image src="/images/icons/balloon.png" class="row-icon" alt="balloon" />
               <p>Lorem ipsum dolor sit amet, 
                  consectetur adipiscing.
                  Sed non risus. Suspendisse lectus tortor,
                  dignissim.
                  Sed non risus. Suspendisse lectus tortor,
                  dignissim.
               </p>
               <a href="#" class="to-know">En savoir +</a>                  
            </div>
            <div class="col-sm card-organization">
               <image src="/images/icons/karaoke.png" class="row-icon" alt="balloon" />
               <p>Lorem ipsum dolor sit amet, 
                  consectetur adipiscing.
                  Sed non risus. Suspendisse lectus tortor,
                  dignissim.
                  Sed non risus. Suspendisse lectus tortor,
                  dignissim.
               </p>
               <a href="#" class="to-know">En savoir +</a>          
            </div>
         </div>
      </section>
      <section>
         <!-- Carousel title -->
         <div>
            <h2 class="h4 text-center carousel-title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit quam ab, autemneque quoae.</h2>
            <p class="text-center mt-4 carousel-subtitle">Tonsectetur adipisicing elit. Impedit quam ab, autemneque quoae.</p>
         </div>
         <!-- Carousel -->
         <div class="carousel slide" data-bs-touch="false">
            <div class="carousel-inner">
               <div class="row">
                  <div class="col-sm card-organization">
                     <img src="/images/slider/slider-1.jpg" class="d-block w-100 carousel-pic" alt="...">
                  </div>
                  <div class="col-sm card-organization d-none d-md-block">
                     <img src="/images/slider/slider-2.jpg" class="d-block w-100 carousel-pic" alt="...">
                  </div>
                  <div class="col-sm card-organization d-none d-md-block">
                     <img src="/images/slider/slider-3.jpg" class="d-block w-100 carousel-pic" alt="...">
                  </div>
                  <div class="col-sm card-organization d-none d-lg-block">
                     <img src="/images/slider/slider-4.jpeg" class="d-block w-100 carousel-pic" alt="...">
                  </div>
                  <div class="col-sm card-organization d-none d-lg-block">
                     <img src="/images/slider/slider-5.jpeg" class="d-block w-100 carousel-pic" alt="...">
                  </div>
                  <div class="col-sm card-organization d-none">
                     <img src="/images/slider/slider-6.jpg" class="d-block w-100 carousel-pic" alt="...">
                  </div>
                  <div class="col-sm card-organization d-none">
                     <img src="/images/slider/slider-7.jpg" class="d-block w-100 carousel-pic" alt="...">
                  </div>
                  <div class="col-sm card-organization d-none">
                     <img src="/images/slider/slider-8.jpeg" class="d-block w-100 carousel-pic" alt="...">
                  </div>
               </div>
            </div>
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
         </div>
      </section>
      <section>
         <!-- Card title -->
         <div>
            <h2 class="h4 text-center card-title">Lorem ipsum dolor sit, amet.</h2>
            <div class="center-container">
               <p class="mt-4 card-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro hic recusandae amet, qui dolores labore vero, facere quos unde id iusto voluptas illo cum inventore laboriosam ipsum.</p>
            </div>
         </div>
         <!-- Cards -->
         <div class="my-5 card-max-width">
            <div class="row">
               <div class="col-sm card-organization center-card my-2">
                  <div class="card-content">
                     <h2 class="h5 font-weight-bold">Lorem</h2>
                     <h3 class="h1 font-weight-bold">nunc</h3>
                     <ul class="card-list">
                        <li>- ullamcorper a</li>
                        <li>- ullamcorper a</li>
                        <li>- ullamcorper a</li>
                        <li>- ullamcorper a</li>
                     </ul>
                     <a href="#" class="card-button">SED</a>   
                  </div>
               </div>
               <div class="col-sm card-organization center-card my-2">
                  <div class="card-content-centered">
                     <h2 class="h5 font-weight-bold">Lorem</h2>
                     <h3 class="h1 font-weight-bold">nunc</h3>
                     <ul class="card-list">
                        <li>- ullamcorper a</li>
                        <li>- ullamcorper a</li>
                        <li>- ullamcorper a</li>
                        <li>- ullamcorper a</li>
                        <li>- ullamcorper a</li>
                        <li>- ullamcorper a</li>
                     </ul>
                     <a href="#" class="card-button">SED</a>   
                  </div>
               </div>
               <div class="col-sm card-organization center-card my-2">
                  <div class="card-content">
                     <h2 class="h5 font-weight-bold">Lorem</h2>
                     <h3 class="h1 font-weight-bold">nunc</h3>
                     <ul class="card-list">
                        <li>- ullamcorper a</li>
                        <li>- ullamcorper a</li>
                        <li>- ullamcorper a</li>
                        <li>- ullamcorper a</li>
                     </ul>
                     <a href="#" class="card-button">SED</a>   
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Newsletter -->
      <section class="newsletter">
         <div class="container">
            <div class="row">
               <form class="col-sm-12">
                  <div class="content">
                     <h2>Lorem ipsum dolor sit, amet.</h2>
                     <div class="input-group">
                        <image src="/images/icons/email.png" class="email-icon rounded" alt="email" />
                        <input type="email" class="form-control rounded" placeholder="Adresse email">
                        <span class="input-group-btn">
                        <button class="btn" type="submit" aria-label="newsletter button">Souscrire</button>
                        </span>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </section>
      <!-- Footer -->
      <footer class="text-center text-lg-start text-muted">
         <section class="">
            <div class="container text-center text-md-start mt-5">
               <!-- Grid row -->
               <div class="row mt-3">
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                     <!-- Links -->
                     <h6 class="fw-bold mb-4 h5">
                        Compagnie
                     </h6>
                     <p>
                        <a href="#!" class="text-reset">Este ante</a>
                     </p>
                     <p>
                        <a href="#!" class="text-reset">Porta non</a>
                     </p>
                     <p>
                        <a href="#!" class="text-reset">Ultrices dui</a>
                     </p>
                     <p>
                        <a href="#!" class="text-reset">Lorem ipsum</a>
                     </p>
                     <p>
                        <a href="#!" class="text-reset">Lorem ipsum</a>
                     </p>
                  </div>
                  <!-- Grid column -->
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                     <!-- Links -->
                     <h6 class="fw-bold mb-4 h5">
                        Compagnie
                     </h6>
                     <p>
                        <a href="#!" class="text-reset">Este ante</a>
                     </p>
                     <p>
                        <a href="#!" class="text-reset">Porta non</a>
                     </p>
                     <p>
                        <a href="#!" class="text-reset">Ultrices dui</a>
                     </p>
                     <p>
                        <a href="#!" class="text-reset">Lorem ipsum</a>
                     </p>
                     <p>
                        <a href="#!" class="text-reset">Lorem ipsum</a>
                     </p>
                  </div>
                  <!-- Grid column -->
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                     <!-- Links -->
                     <h6 class="fw-bold mb-4 h5">
                        Compagnie
                     </h6>
                     <p>
                        <a href="#!" class="text-reset">Este ante</a>
                     </p>
                     <p>
                        <a href="#!" class="text-reset">Porta non</a>
                     </p>
                     <p>
                        <a href="#!" class="text-reset">Ultrices dui</a>
                     </p>
                     <p>
                        <a href="#!" class="text-reset">Lorem ipsum</a>
                     </p>
                     <p>
                        <a href="#!" class="text-reset">Lorem ipsum</a>
                     </p>
                  </div>
                  <!-- Grid column -->
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                     <!-- Links -->
                     <h6 class="fw-bold mb-4 h5">
                        Compagnie
                     </h6>
                     <p>
                        <a href="#!" class="text-reset">Este ante</a>
                     </p>
                     <p>
                        <a href="#!" class="text-reset">Porta non</a>
                     </p>
                     <p>
                        <a href="#!" class="text-reset">Ultrices dui</a>
                     </p>
                     <p>
                        <a href="#!" class="text-reset">Lorem ipsum</a>
                     </p>
                     <p>
                        <a href="#!" class="text-reset">Lorem ipsum</a>
                     </p>
                  </div>
                  <!-- Grid column -->
               </div>
               <!-- Grid row -->
            </div>
         </section>
      </footer>
   </body>
</html>