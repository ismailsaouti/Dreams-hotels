 <!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- Custom Styling -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
  <header>
    <div class="logo">
      <h1 class="logo-text"><span>Dreams</span>Hotel</h1>
    </div>
    <i class="fa fa-bars menu-toggle"></i>
    <ul>
              <li><a href="{{ route('index') }}">Accueil</a></li>
              <li><a href="chambres">Chambres</a></li> 
                               <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('S\'inscrire') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    
      <!-- <li>
        <a href="#">
          <i class="fa fa-user"></i>
          Awa Melvine
          <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
        </a>
        <ul>
          <li><a href="#">Dashboard</a></li>
          <li><a href="#" class="logout">Logout</a></li>
        </ul>
      </li> -->
    </ul>
  </header>	  
 <main class="py-4">
            @yield('content')
        </main>
  </div> <!--Container-->
  
  <!-- footer -->
  <div class="footer">
    <div class="footer-content">

      <div class="footer-section about">
        <h1 class="logo-text"><span>Dreams</span>Hôtels</h1>
        <p>
          AwaInspires is a fictional blog conceived for the purpose of a tutorial on YouTube.
          However, Awa has a blog called pieceofadvice.org where he writes truly inspiring stuff.
        </p>
        <div class="contact">
          <span><i class="fas fa-phone"></i> &nbsp; 123-456-789</span>
          <span><i class="fas fa-envelope"></i> &nbsp; info@dreamshotel.com</span>
        </div>
        <div class="socials">
          <a href=""><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <div class="footer-section links">
        <h2>Quick Links</h2>
        <br>
        <ul>
          <a href="#">
            <li>xxxxx</li>
          </a>
          <a href="#">
            <li>xxxxxx</li>
          </a>
          <a href="#">
            <li>xxxxxxxxx</li>
          </a>
          <a href="#">
            <li>xxxxxxx</li>
          </a>
          <a href="#">
            <li>xxxxxxxxxx</li>
          </a>
        </ul>
      </div>

      <div class="footer-section contact-form">
        <h2>Contactez-nous</h2>
        <br>
        <form action="index.html" method="post">
          <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
          <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
          <button type="submit" class="btn btn-big contact-btn">
            <i class="fas fa-envelope"></i>
            Send
          </button>
        </form>
      </div>

    </div>

    <div class="footer-bottom">
      &copy; codingpoets.com | Designed by Awa Melvine
    </div>
  </div>
  <!-- // footer -->


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="js/scripts.js"></script>

</body>

</html>
  	
</body>
</html>				
