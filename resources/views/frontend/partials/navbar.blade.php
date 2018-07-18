<nav class="navbar navbar-default" data-spy="affix" data-offset-top="510">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{url('img/master/logoHD.png')}}" alt="KMIPN">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
        <li class="active"><a href="{{url('/')}}/#">beranda</a></li>
        <li><a href="{{url('/')}}">kategori lomba</a></li>
        <li><a href="{{url('/')}}">tentang kmipn</a></li>
        <li><a href="{{url('/')}}">informasi</a></li>
        <li><a href="{{url('/')}}">galeri</a></li>
        <li><a href="{{url('/jadwal-pelaksanaan')}}">jadwal</a></li>
        <li><a href="{{url('/faq')}}">faq</a></li>
        @if(!auth()->user())  
          @if (Request::segment('1') == 'login')
            <li class="active"><a href="{{url('login')}}">Login</a></li>
          @else
            <li><a href="{{url('login')}}">Login</a></li>
          @endif

          @if (Request::segment('1') == 'register')
            <li class="active"><a href="{{url('register')}}">Register</a></li>
          @else
            <li><a href="{{url('register')}}">Register</a></li>
          @endif
        @endif
        @if(auth()->user())
          <li><a href="{{url('profile/dashboard')}}">Info TIM</a></li>
          <li><a href="{{url('auth/logout')}}">Logout</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>
