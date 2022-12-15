<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/homepage.css')}}" class="">
  <title>Homepage</title>
</head>

<body>

  <body>

    <div class="sidebar">
      <div class="logo">
        <a href="#">
          <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_CMYK_Green.png" alt="Logo" />
        </a>
      </div>

      <div class="navigation">
        <ul>
          <li>
            <a href="#">
              <span class="fa fa-home"></span>
              <span>Home</span>
            </a>
          </li>

          <li>
            <form action="{{route('search')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <a href="#">
                <span class="fa fa-search"></span>
                <span>Search</span>
              </a>

            </form>

          </li>

          <li>
            <a href="#">
              <span class="fa fas fa-book"></span>
              <span>Your Library</span>
            </a>
          </li>
        </ul>
      </div>

      <div class="navigation">
        <ul>


          <li>
            <a href="#">
              <span class="fa fas fa-heart"></span>
              <span>Liked Songs</span>
            </a>
          </li>
        </ul>
      </div>

      <div class="policies">
        <ul>
          <li>
            <a href="#">Cookies</a>
          </li>
          <li>
            <a href="#">Privacy</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="main-container">
      <div class="topbar">
        <div class="prev-next-buttons">
          <button type="button" class="fa fas fa-chevron-left"></button>
          <button type="button" class="fa fas fa-chevron-right"></button>
        </div>

        <div class="navbar">
        <form action="{{route('login.search')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="wrap">
              <div class="search">
                <input type="text" class="searchTerm" name="keyWord" placeholder="What are you looking for?">

                <i class="fa fa-search"></i>

              </div>
            </div>

          </form>
          <ul>
            
            

            <li>
              <a href="https://www.spotify.com/vn-en/premium/?utm_source=vn-en_brand_contextual_text&utm_medium=paidsearch&utm_campaign=alwayson_asia_vn_performancemarketing_core_brand+contextual-desktop+text+exact+vn-en+google&gclid=Cj0KCQiA1NebBhDDARIsAANiDD32YGL0gNs1PE9S9s1ONt1LaHPD3Jir3nQ0cD6tPNpc8RJ3EEYoA3AaAoq-EALw_wcB&gclsrc=aw.ds">Premium</a>
            </li>
            <li>
              <a href="https://support.spotify.com/vn-en/">Support</a>
            </li>
            <li>
              <a href="https://www.spotify.com/us/download/other/">Download</a>
            </li>
            <li class="divider">|</li>
            <li>
              <a href="{{route('login_done')}}">{{ Auth::user()-> name}}</a>
            </li>
          </ul>
          <a href="{{route('home')}}"><button type="button">Log out</button></a>
        </div>
      </div>



      <div class="spotify-playlists">
        <h2>Collection of the best music songs for you!</h2>
        <div class="list">

          @foreach($videos as $video)
          <div class="card">
            <div class="card-img">
              <iframe width="250" , height="200" src="https://youtube.com/embed/{{ $video->video_url}}" framborder="0" allow="accelerometer; autoplay"></iframe>
            </div>
            <div class="card-title">
              <h3>{{$video->name}}</h3>
              <p>{{$video->description}}</p>
            </div>
            <div class="card-details">
              <div class="price">
                <span>Price</span>
                <p>{{$video->price}}</p>
              </div>
              <div class="volume">
                <span>Category</span>
                <p>{{$video->category}}</p>
              </div>
            </div>
            
              <a href="{{route('auth.checkout',$video->id)}}"> <button>Buy Now</button></a>

            

          </div>
          @endforeach



        </div>
      </div>

      <div class="spotify-playlists">
        <h2>Latest trending song</h2>
        <div class="list">

          <div class="item">
            <img src="https://event.mediacdn.vn/2020/8/20/jack-1-15979140481901778569892.jpg" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>Eventually</h4>
            <p>Jack</p>
          </div>

          <div class="item">
            <img src="data:image/jpeg;base64,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" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>Die in you</h4>
            <p>Thinh Suy</p>
          </div>

          <div class="item">
            <img src="https://i.scdn.co/image/ab67616d0000b27326ee51713786019f7ea3f35f" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>Beautiful Monster</h4>
            <p>Soobin, Binz</p>
          </div>

          <div class="item">
            <img src="data:image/jpeg;base64,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" />
            <div class="play">
              <span class="fa fa-play"></span>
            </div>
            <h4>Simple</h4>
            <p>Low G</p>
          </div>
        </div>

        <hr>
      </div>


    </div>

    <script src="https://kit.fontawesome.com/23cecef777.js" crossorigin="anonymous"></script>
  </body>
</body>

</html>