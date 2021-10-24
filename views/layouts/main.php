<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title><?= $view_bag['title']?></title>
  </head>
  <body>
      <div class="containe-fluid bg-secondary">
        <section class="container">
          <nav class="navbar navbar-expand-lg navbar-dark ">
                <a href="" class="navbar-brand">Tingdog</a>
              <ul class="navbar-nav"> 
                  <li class="nav-item"><a href="" class="nav-link">HOME</a></li>
                  <li class="nav-item"><a href="" class="nav-link">Service</a></li>
                  <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                  <li class="nav-item"><a href="" class="nav-link">Price</a></li>
                  <li class="nav-item"><a href="" class="nav-link">About </a></li>  
                  <li class="nav-item"><a href="" class="nav-link">Download</a></li>
              </ul>
          </nav>
          </section>
      </div>
    <?php
      require("views/$url.view.php");

    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>