<html>
  <head>
    <title>WormsClub-home page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="stylesheet2.css" />
    <style>
      
      .carousel-caption{
        font-family: 'Playfair Display', serif;
      }
      .lead{
        font-family: 'Playfair Display', serif;
        color:#014F86 ; 
      }

    </style>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <div class="container-fluid">
          <a
            class="navbar-brand"
            href="#"
            style="
              color: white;
              font-family: 'Great Vibes', cursive;
              font-size: 45;
            "
            >WormsClub</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="bookclub.php"> Our Club</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="library.php">Library</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Account.php">Account</a>
              </li>
            </ul>
            <div>
              <a class="btn btn-secondary" type="button" href="signin.php">Sign In</a>
          </div>
        </div>
      </nav>
    </header>

    
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
              
               <img  class=" bd-placeholder-img" src="photos/pic4.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"> 
              <div class="container">
                <div class="carousel-caption text-start">
                  <h1>Join Us!</h1>
                  <p>Whether you want to connect with others or explore many online books, This website is for you!</p>
                  <p><a class="btn btn-lg btn-primary" href="signup.php">Sign up today</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
                <img  class=" bd-placeholder-img" src="photos/pic2.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"> 
      
              <div class="container">
                <div class="carousel-caption">
                  <h1>Book Community</h1>
                  <p>Connect, intract, and Discuss your Favourite books with other Bookworms </p>
                  <p><a class="btn btn-lg btn-primary" href="bookclub.php">Our BookClub</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
                <img  class=" bd-placeholder-img" src="photos/pic3.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"> 
      
              <div class="container">
                <div class="carousel-caption text-start ">
                  <h1> <strong>Online Books</strong> </h1>
                  <p><strong> Explore new Books To read From our variety of online Books.</strong></p>
                  <p><a class="btn btn-lg btn-primary" href="library.php">Browse Library</a></p>
                </div>
              </div>
            </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
          
        </div>
  
        <hr class="featurette-divider" />
        
        <div class="row w-100 my-md-3 ps-md-3">
           <div class="col-md-6 col-lg-6 col-sm-12">
             <div class="headline  text-center overflow-hidden">
               <div class="my-3 py-3">
                 <h2 class="lead display-5  ">Coming Soon books:</h2>
                 <p class="lead">Atomic Habits</p>
                 <p class="lead">Then She Was Gone</p>
               </div>
               <img class="bg-light shadow-sm mx-auto " src="photos/Atomic Habits.jpg" style="width: 40%; height: 300px; border-radius: 21px 21px 0 0;">
               <img class="bg-light shadow-sm mx-auto " src="photos/Then She Was Gone.jpg" style="width: 40%; height: 300px; border-radius: 21px 21px 0 0;">
              </div>
            </div>
           <div class="col-md-6 col-lg-6 col-sm-12">
             <div class="headline  text-center overflow-hidden">
               <div class="my-3 py-3">
                 <h2 class="lead display-5">Most Popular Book:</h2>
                 <p class="lead">A Little Life</p>
                 <p class="lead">The Women In The Window</p>
               </div>
               <img class="bg-light shadow-sm mx-auto " src="photos/ALittleLife.jpg" style="width: 40%; height: 300px; border-radius: 21px 21px 0 0;">
               <img class="bg-light shadow-sm mx-auto " src="photos/the women in the window.jpg" style="width: 40%; height: 300px; border-radius: 21px 21px 0 0;">
             </div>
           </div>  
        </div>
        <hr class="featurette-divider" />
      </div>

      <!-- FOOTER -->
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3  border-top">
        <p class="col-md-4 mb-0 text-white">Contact us: fake@outlook.com</p>
        <a
          class="navbar-brand"
          href="#"
          style="
            color: white;
            font-family: 'Great Vibes', cursive;
            font-size: 45;
          "
          >WormsClub</a>
    
        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a class="nav-link text-white" href="bookclub.php"> Our Club</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="library.php">Library</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="Account.php">Account</a></li>
        </ul>
        <p class="text-white col-md-4"> &copy; 2022 Company, Inc</p>
      </footer>     
  </body>
</html>
