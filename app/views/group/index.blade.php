@extends("layout")
@section('header')
@stop
@section("content")
<!-- Services Section -->
<div id="contact" class="section section-expand">
    <div class="section-title"><i class="icon-lock"></i><strong>Доступ</strong>
        <p><span>К ресурсам сайта</span></p>
    </div>

    <!-- Services Content -->
    <div class="container">
        <ul class="thumbnails">
            <li class="span4">
                <div class="thumbnail">
                    <img data-src="holder.js/300x200" alt="">
                    <h3>Создать группу</h3>
                    <a href="{{ URL::route("group/add") }}" class="btn goto-folio">Создать</a>
                </div>
            </li>
        </ul>
        <hr />
    @if (count($groups))
    <h1 class="main-title">Выберите <span>группу</span></h1>

        <ul class="thumbnails">
            @foreach ($groups as $group)
            <li class="span4">
                <div class="thumbnail">
                    <img data-src="holder.js/300x200" alt="">
                    <h4>{{ $group->id . ". " . $group->name }}</h4>
                </div>
                </a>
            </li>
            <li class="span4">

                <a href="{{ URL::route("group/edit") }}?id={{ $group->id }}">
                    <div class="thumbnail">
                        <img data-src="holder.js/300x200" alt="">
                        <h4>Edit</h4>
                    </div>
                </a>
            </li>
            <li class="span4">

                <a href="{{ URL::route("group/delete") }}?id={{ $group->id }}">
                <div class="thumbnail">
                    <img data-src="holder.js/300x200" alt="">
                    <h4>Delete</h4>
                </div>
                </a>
            </li>

            @endforeach
        </ul>
    @else
        <p>There are no groups.</p>
    @endif
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