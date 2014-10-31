@extends("layout")
@section("header")
@stop
@section("content")
<!-- Services Section -->
<div id="services" class="section section-expand">
    <div class="section-title"><i class="icon-cog"></i><strong>Параметры</strong>
        <p><span>Настройка</span></p>
    </div>

    <!-- Services Content -->
    <div class="container">
        <hr />
        <h1 class="main-title">Выберите <span>категорию</span></h1>
        <p class="lead">для дальнейшей настройки параметров</p>
        <div class="flexslider">

            <!-- Services List Carousel -->
            <ul class="thumbnails slides">

                <!-- Service Detail -->
                {{ Form::category(array(
                    "class" => "lock",
                    "span"  => "Доступ",
                    "h5"    => "групп к ресурсам",
                    "p"     => "Открыть/закрыть доступ к ресурсам",
                    "a"     => "Настроить",
                    "href"  => "group/index"
                )) }}
                {{ Form::category(array(
                    "class" => "save",
                    "span"  => "Архивирование",
                    "h5"    => "резервное копирование",
                    "p"     => "Создать резервную копию",
                    "a"     => "Открыть",
                    "href"  => "user/login"
                )) }}
                {{ Form::category(array(
                    "class" => "wrench",
                    "span"  => "Параметры",
                    "h5"    => "анализа выписки",
                    "p"     => "Изменить параметры анализа выписки",
                    "a"     => "Настроить",
                    "href"  => "service/index"
                )) }}
                {{ Form::category(array(
                    "class" => "road",
                    "span"  => "Маршруты",
                    "h5"    => "ресурсов сайта",
                    "p"     => "Добавить/изменить/удалить - просмотр",
                    "a"     => "Открыть",
                    "href"  => "resource/index"
                )) }}
            </ul>
        </div>
        <hr />

        <!-- Service Slogan -->
        <h2><span>НЕ ТРОГАТЬ</span></h2>
        <p class="lead">Если ты не знаешь для чего эти настройки, <span>не трогай тут ничего</span> это раздел администратора.<br />
            Если ты хочешь что-то <span>изменить</span> свяжись с техником или администратором для подробной информации.</p>
    </div>
</div>

<!-- Switch Section -->
<div class="switch-section">
    <p class="switch-section-cont"><a href="{{ URL::route("front/index") }}" class="section-home {{ (Route::getCurrentRoute()->getPath() == "/") ? "active" : "" }}"><span class="icon-home"></span></a> <a href="#" class="section-about {{ (Route::getCurrentRoute()->getPath() == "doctor") ? "active" : "" }}"><span class="icon-smile"></span></a> <a href="#" class="section-services  {{ (Route::getCurrentRoute()->getPath() == "specimen") ? "active" : "" }}"><span class="icon-th-list"></span></a> <a href="#" class="section-folio {{ (Route::getCurrentRoute()->getPath() == "analyse") ? "active" : "" }}"><span class="icon-briefcase"></span></a> <a href="#" class="section-blog {{ (Route::getCurrentRoute()->getPath() == "user") ? "active" : "" }}"><span class="icon-user"></span></a> <a href="{{ URL::route("service/index") }}" class="section-contact {{ (Route::getCurrentRoute()->getPath() == "service") ? "active" : "" }}"><span class="icon-cog"></span></a></p>
</div>
<a href="#" class="section-close">×</a>
@stop