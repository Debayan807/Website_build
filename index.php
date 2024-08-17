<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Start</title>
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
          <a class="nav-link" href="#service">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contacts</a>
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
<!--
<nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Offcanvas navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
-->


<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>
    
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/img10.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/img4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/img3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Fourth slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/img16.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Fifth slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/img17.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Sixth slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/img19.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Seventh slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/img18.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Eight slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/img6.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Ninth slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
   
    <div class="carousel-item">
      <img src="img/img11.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Tenth slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
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

<section class="my-5" id="service"> <!-- margin 5 -->
    <div class="py-5"> <!-- padding 5 -->
        <h3 class="text-center">Our Services</h3> <!--Use text-center to write the text in the middle without using css -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
  <img src="img/img20.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Fire Force</h5>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit iusto harum eligendi cumque exercitationem modi dolore, dicta nulla? Accusantium est aut unde..</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
  <img src="img/img15.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">One Piece</h5>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis aliquam dolor a nisi voluptatibus, laudantium tenetur possimus fugiat qui reprehenderit nam dolores?.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
  <img src="img/img5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Mindcraft</h5>
    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium sint, eius ducimus perferendis sapiente aliquid voluptate, quam rem esse odio omnis tempora!.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
                </div>
            </div>
            

        </div>
    </div>
</section>

<section class="my-5"> <!-- margin 5 -->
    <div class="py-5"> <!-- padding 5 -->
        <h3 class="text-center">Our Gallery</h3> 
    </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/img12.jpg" alt="" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/img17.jpg" alt="" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/img5.jpg" alt="" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/img30.jpg" alt="" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/img11.jpg" alt="" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/img32.jpg" alt="" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/img18.jpg" alt="" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/img9.jpg" alt="" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/img7.jpg" alt="" class="img-fluid pb-3">
                </div>
               
                </div>
                </div>
</section>


<section class="my-5" id="contact"> <!-- margin 5 -->
    <div class="py-5"> <!-- padding 5 -->
        <h3 class="text-center">Contact</h3> 
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label >Username</label>
                <input type="text" name="user" autocomplete="off" class="form-control mb-3">
            </div>
            <div class="form-group">
                <label >Email Id</label>
                <input type="email" name="email" autocomplete="off" class="form-control mb-3">
            </div>
            <div class="form-group">
                <label >Mobile</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control mb-3">
            </div>
            <div class="form-group">
                <label >Comment</label>
                <textarea class="form-control mb-3" name="comment"> </textarea>
            </div>
            <div>
 
            <button type="submit" class="btn btn-primary mb-3 " >Submit</button>
        </form>
    </div>
</section>

<footer>
    <p class="p-3 bg-dark text-white text-center">@debayantechnical</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>