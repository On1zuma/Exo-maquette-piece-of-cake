<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <link href="style.css" rel="stylesheet">
      <title>Piece of Cake - Confirmation</title>
   </head>
   <body>
      <section class="message-confirmation">
         <div class="content d-flex justify-content-between mx-2 flex-column flex-xl-row">
            <image src="/images/cake.jpg" class="img-fluid object-fit-cover custom-img-height" alt="email" />
            <form action="" class="d-flex w-100 flex-column justify-content-center ">
               <p class="font-weight-bold h5"><?php echo $_GET['email'] ?? ''; ?></p>
               <p class="font-weight-bold h5">Bonjour <?php echo $_GET['name'] ?? ''; ?></p>
               <p class="font-weight-normal">Nous vous remercions pour votre message.</p>
               <textarea class="form-control custom-form-boder-color" rows="6" id="floatingInput" ><?php echo $_GET['message'] ?? ''; ?></textarea>
               <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum similique numquam, 
                  distinctio ad explicabo cupiditate impedit aperiam provident eveniet accusantium 
                  illo iusto quae dolorum sunt consectetur deserunt magnam? Sed, tenetur?
               </p>
            </form>
         </div>
      </section>
   </body>
</html>