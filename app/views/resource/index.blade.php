@extends("layout")
@section('header')
@stop
@section("content")
<!-- Services Section -->
<div id="contact" class="section section-expand">
    <div class="section-title"><i class="icon-road"></i><strong>Маршруты</strong>
        <p><span>Ресурсов сайта</span></p>
    </div>

    <!-- Services Content -->
    <div class="container">
        <ul class="thumbnails">
            <li class="span4">
                <div class="thumbnail">
                    <img data-src="holder.js/300x200" alt="">
                    <h3>Создать маршрут</h3>
                    <a href="{{ URL::route("resource/add") }}" class="btn goto-folio">Создать</a>
                </div>
            </li>
        </ul>
        <hr />
        <h1 class="main-title">Выберите <span>маршрут</span></h1>

        <ul class="thumbnails">
            @foreach($resources as $resource)
              <li class="span4">
                <a href="{{ URL::route("resource/edit") . "?id=" . $resource->id }}"><div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="">
                  <h4>{{ $resource->id . ". " . $resource->name }}</h4>
                </div></a>
              </li>
            @endforeach
        </ul>
    </div>
        <hr />

        <!-- Service Slogan -->
        <h2><span>НЕ ТРОГАТЬ</span></h2>
        <p class="lead">Если ты не знаешь для чего эти настройки, <span>не трогай тут ничего</span> это раздел администратора.<br />
            Если ты хочешь что-то <span>изменить</span> свяжись с техником или администратором для подробной информации.</p>

</div>



<!-- Switch Section -->
<div class="switch-section">
    <p class="switch-section-cont"><a href="{{ URL::route("front/index") }}" class="section-home {{ (Route::getCurrentRoute()->getPath() == "/") ? "active" : "" }}"><span class="icon-home"></span></a> <a href="#" class="section-about {{ (Route::getCurrentRoute()->getPath() == "doctor") ? "active" : "" }}"><span class="icon-smile"></span></a> <a href="#" class="section-services  {{ (Route::getCurrentRoute()->getPath() == "specimen") ? "active" : "" }}"><span class="icon-th-list"></span></a> <a href="#" class="section-folio {{ (Route::getCurrentRoute()->getPath() == "analyse") ? "active" : "" }}"><span class="icon-briefcase"></span></a> <a href="#" class="section-blog {{ (Route::getCurrentRoute()->getPath() == "user") ? "active" : "" }}"><span class="icon-user"></span></a> <a href="{{ URL::route("service/index") }}" class="section-contact {{ (Route::getCurrentRoute()->getPath() == "service") ? "active" : "" }}"><span class="icon-cog"></span></a></p>
</div>
<a href="#" class="section-close">×</a>
@stop