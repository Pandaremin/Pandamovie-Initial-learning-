<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PandaMovie</title>
    <script src="https://kit.fontawesome.com/784194f36f.js" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/style.css')}}"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.css"/>
</head>
<body >
<header>
        <nav class="navbar navbar-expand-lg navbarstyle fixed-top ">
          <div class="container-fluid">
            <a class="navbar-brand navv"  href="{{ url('') }}"><b>PandaMovie</b></a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span style="color: white; border: 0px;">
                <i class="fas fa-bars"></i>
              </span>        </button>
              
            <div class="collapse navbar-collapse justify-content-between" " id="navbarSupportedContent"  ">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0"  >
                <li class="nav-item" id="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ url('') }}">Home</a>
                </li>
                <li class="nav-item dropdown" id="nav-item">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Genre
                  </a>
                  <ul class="dropdown-menu drop " style="background-color:#131720 " aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item genre" id="genre" href="#">Action</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">Adventure</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">Animation</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">Biography</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">Comedy</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">Crime</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">Documentary</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">Drama</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">Family</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">Fantasy</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">Film Noir</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">History	</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">Horror</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">Music</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">Musical</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">Mystery</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">Romance</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">Sci-Fi</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">Short Film</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">Sport</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">Superhero</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">Thriller</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">War</a></li>
                    <li><a class="dropdown-item genre" id="genre" href="#">Western</a></li>
                  </ul>
                </li>
                <li class="nav-item" id="nav-item">
                  <a class="nav-link" href="{{ url('movie/popular') }}">Popular</a>
                </li>
                <li class="nav-item" id="nav-item">
                    <a class="nav-link" href="{{ url('movie') }}">Recent</a>
                </li>
                  <li class="nav-item" id="nav-item">
                  <a class="nav-link" href="{{ url('') }}">How to download</a>
                  </li>
                  
                
                
                
              </ul>
            </div>
          </div>
        </nav>
        
        </header>
        
<div class="container">
  
<div style="margin-top:80px;display:flex;justify-content:flex-end;">

  <form method="GET" action="{{ url('search') }}">
  <div class="search-box">
                            <input type="text" name="query" type="search" class=" search-input" placeholder="Search">
                        
                            <button class=" search-button" type="submit"><i class="fas fa-search"></i></button>
                            </div>                      
                </form>
</div>
    @yield('content')
</div>
<footer class="text-center mt-5 py-4 text-muted">
    <img src="https://i.pinimg.com/originals/b2/ce/98/b2ce98392df5c686796e9233d77175fc.gif" width="40px" height="30px" alt=""> &copy; 2021 Copyright: Panda Team</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>