<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Latihan Bootstrap</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button"
        data-toggle="collapse" 
        data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span> 
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="http://google.com/"> Google</a>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://upj.ac.id/"> UPJ</a>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://collabor.upj.ac.id/"> Collabor UPJ</a>
                    
                </li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron text-center">
        <h1>Halaman Bootstrap Pertama Saya</h1>
        <p>Resize Halaman Ini.</p>
    </div>
    <div class="container">
        <div class="row">
        <form action="konfirmasisubmit.php" method="POST">
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Hobby:
  <input type="checkbox" name="hobby" value="Nyanyi">Nyanyi
  <input type="checkbox" name="hobby" value="Baca">Baca
  <input type="checkbox" name="hobby" value="Lari">Lari
  <br><br>
  Gender:
  <input type="radio" name="gender" value="L">L
  <input type="radio" name="gender" value="P">P
  <br><br>
  Tanggal Lahir:
  <input type="datetime-local" />
  <input type="submit" name="ttl" value="Submit">  
</form>

<?php>
        

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


  </body>
</html>