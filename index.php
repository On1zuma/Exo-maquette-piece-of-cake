<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img class="logo" src="/images/logo.jpg" /></a>
  </div>
</nav>
    
<!-- Hero -->
<div class="container-fluid hero">
    <div class="container  col-xxl-8 py-5">
        <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start text-white d-lg-flex green-card-bg"> 
            <image src="/images/icons/birthday.png" class="balloon" alt="balloon" />
            <div>
                <h1 class="h5 fw-semibold lh-1 mb-1 ">UN EVENEMENT A OGANISER ?</h1>
                <p class="col-lg-10 h1 fw-bold">Nos professionnels s'occupent de tout !</p>
            </div>         
        </div>
        <div class="col-md-10 mx-auto col-lg-5 mt-3">
            <form class="p-4  rounded-1 border bg-light text-light-emphasis">
                <p class="text-center fw-bold h4 mb-5 text-secondary">Organiser un évènement</p>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control custom-form-boder-color" id="floatingInput" placeholder="James May">
                    <label for="floatingInput">Nom & Prénom</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control custom-form-boder-color" id="floatingPassword" placeholder="james@hotmail.com">
                    <label for="floatingPassword">Adresse email</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control custom-form-boder-color" rows="3" id="floatingInput"></textarea>            
                    <label for="floatingPassword">Message</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary mb-3 not-rounded green-btn-bg" type="submit">Organiser</button>
            </form>
        </div>
        </div>
    </div>
  </div>

  <!-- Row -->
  <div class="my-5">
        <div class="row">
            <div class="col-sm">
            One of three columns
            </div>
            <div class="col-sm card-organization">
                <image src="/images/icons/calendar.png" class="row-icon" alt="balloon" />
                <p>Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit.
                     Sed non risus. Suspendisse lectus tortor,
                      dignissim sit amet, adipiscing nec, ultricies sed,
                       dolor. Cras elementum ultrices diam.
                        Proin porttitor, orci nec nonummy molestie,
                         enim est eleifend mi, non fermentum diam nisl sit amet erat.
                </p>
                <a href="#" class="to-know">En savoir +</a>          
            </div>
            <div class="col-sm card-organization">
                <image src="/images/icons/balloon.png" class="row-icon" alt="balloon" />
                <p>Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit.
                     Sed non risus. Suspendisse lectus tortor,
                      dignissim sit amet, adipiscing nec, ultricies sed,
                       dolor. Cras elementum ultrices diam.
                        Proin porttitor, orci nec nonummy molestie,
                         enim est eleifend mi, non fermentum diam nisl sit amet erat.
                </p>    
                <a href="#" class="to-know">En savoir +</a>                  
            </div>
            <div class="col-sm card-organization">
                <image src="/images/icons/karaoke.png" class="row-icon" alt="balloon" />
                <p>Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit.
                     Sed non risus. Suspendisse lectus tortor,
                      dignissim sit amet, adipiscing nec, ultricies sed,
                       dolor. Cras elementum ultrices diam.
                        Proin porttitor, orci nec nonummy molestie,
                         enim est eleifend mi, non fermentum diam nisl sit amet erat.
                </p>  
                <a href="#" class="to-know">En savoir +</a>          
            </div>
        </div>
    </div>


    <!-- Carrousel -->
</body>
</html>