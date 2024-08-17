<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head>
<body>

<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
<!-- <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark"> -->

  <div class="container-fluid">
    <a class="navbar-brand" href="#">Debayan Technical</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php #service">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php #contact">Contacts</a>
        </li>
       
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</section>
<div class="jumbotron">
  <h1 class="display-4 text-center"><b style="color: chartreuse;">Debayan</b> Technical</h1>
  <p class="lead text-center" style="color:darkorange"> Dynamic Website in HTML, PHP & MySQL</p>
  <hr class="my-4 ">
  <p class="text-center" style="color: crimson;">Java | HTML | CSS | JavaScript | PHP | MySQL | Oracle | MongoDB</p>
 
</div>

<section class="my-5"> <!-- margin 5 -->
    <div class="py-5"> <!-- padding 5 -->
        <h3 class="text-center">About Us</h3> <!--Use text-center to write the text in the middle without using css -->
    </div>
    <div class="container-fluid"> <!-- Not getting scroll -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12"> <!-- divide column in 6 for large and middle devices and divide in 12 for mobiles -->

            <img src="img/img31.jpg" alt="" class="img-fluid aboutimg" > <!-- for making the image fit in the scree -->

            </div>
            <div class="col-lg-6 col-md-6 col-12"> <!-- divide column in 2 for large and middle devices and divide in 1 for mobiles
                There are total 12 sections 12 means 1 and 6 means it divided into 2 -->

           <h2 class="display-8">I am Debayan Ghosh</h2>
           <p class="py-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis omnis, animi ea fugiat quaerat blanditiis ipsam sequi architecto neque excepturi. Laborum fuga dolorum mollitia assumenda ea debitis qui, architecto ducimus expedita quia optio dolore exercitationem numquam explicabo obcaecati at eveniet voluptate porro sit, veniam hic nesciunt! Incidunt aliquam velit molestiae quae dicta autem explicabo optio perspiciatis!</p>
           <a href="about.php" class="btn btn-success"> check More </a>

</div>
        </div>

    </div>
</section>


<footer>
    <p class="p-3 bg-dark text-white text-center">@debayantechnical</p>
</footer>

</body>
</html>