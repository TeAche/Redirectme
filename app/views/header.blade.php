@section("header")
<!-- Logo -->
<div class="logo"><img src="{{ URL::asset('img/logo.png') }}" alt="Logo" /></div>
<div class="top-bar">
    <div class="profile">
        @if (Auth::check())
        {{ Auth::user()->username }} |
            <a href="{{ URL::route("user/logout") }}">
                Logout
            </a>
             |
            <a href="{{ URL::route("user/profile") }}">
                <i class="icon-user"></i>
            </a>
             |
        @if (Auth::user()->username == "timur.khusainov")
            <a href="{{ URL::route("service/index") }}">
                <i class="icon-cog"></i>
            </a>
        @endif

        @else
            <a href="{{ URL::route("user/login") }}">
                Login
            </a>
        @endif
    </div>
</div>
<!-- Slider -->
<div id="slides">
  <ul class="slides-container">
    
    <!-- Slider Single Item -->
    <li><a href="#"><img src="{{ URL::asset('img/slide1.jpg') }}" alt="Photo" /></a>
      <div class="slides-detail">
        <h1><span>БД</span> врачей</h1>
        <span class="lead">Ввод, хранение и <strong>анализ</strong></span></div>
    </li>
    
    <!-- Slider Single Item -->
    <li><a href="#"><img src="{{ URL::asset('img/slide2.jpg') }}" alt="Photo" /></a>
      <div class="slides-detail">
        <h1><span>БД</span> рецептурников</h1>
        <span class="lead">Автоматизация <strong>анализа</strong></span></div>
    </li>
    
    <!-- Slider Single Item -->
    <li><a href="#"><img src="{{ URL::asset('img/slide3.jpg') }}" alt="Photo" /></a>
      <div class="slides-detail">
        <h1><span>БД</span> АВ</h1>
        <span class="lead">Хранение и <strong>анализ</strong></span></div>
    </li>
  </ul>
  
  <!-- Slider Navigation -->
  <div class="slides-navigation"><a href="#" class="prev"><i class="icon-angle-left"></i></a> <a href="#" class="next"><i class="icon-angle-right"></i></a></div>
</div>
@show