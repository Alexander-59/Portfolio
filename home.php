<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>About Me</title>
  </head>
  <body>
   <nav class="navbar navbar-expand-lg" id="navbar">
    <a class="navbar-brand" href="#">Portfolio</a>
    <button class="navbar-toggler btn-outline-success" id="toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            About Me
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="education.html">Education</a>
            <a class="dropdown-item" href="skills.html">Skills</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="projects.html">Projects</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>

        <li class="nav-item">
          <form action="feedback.html" method="get">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Feedback</button>
          </form>
          
        </li>

      </ul>
    </div>
  </nav>


  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="Photos/photo2.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="Photos/photo1.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="Photos/photo3.JPG" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
  

  <div class="jumbotron jumbotron-fluid">
    <div class="container">

    <?php
      include_once('db_conn.php');

      $sql = "SELECT name, objective, quote FROM `home`";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
            // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

    ?>

      <h2><?php echo  $row['name'] ; ?> </h2> <br>
      <h2> <?php echo $row['objective']; ?> </h2> <br>
      <blockquote> <?php echo $row['quote']; ?> </blockquote> 

      <?php 
  } 
  ?>

    </div>
  </div>
  
  <?php
  mysqli_close($conn);
  ?>
  

  <!--
<div class="wc" id="welcome">
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="Photos/photo1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Sanjib Kumar Paul</h5>
      <p class="description">Being a computer science student, I want to apply my knowledge in Agriculture to grow safe food for future and I also want to work on Climate change for a better World!.</p>
    </div>
  </div>
</div>
  -->



    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
