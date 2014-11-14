@extends('layout')
@section('header')
@stop
@section('content')
<!-- Services Section -->
<div id="about" class="section section-expand">
    <div class="section-title"><i class="icon-smile"></i><strong>Врачи</strong>
        <p><span>База врачей</span></p>
    </div>

    <!-- Doctors Content -->
    <div class="container">
        <hr />
        <h1 class="main-title">Выберите <span>категорию</span></h1>
        <p class="lead">для дальнейшей работы с базой</p>
        <div class="flexslider">

            <!-- Services List Carousel -->
            <ul class="thumbnails slides">

                <!-- Service Detail -->
                {{ Form::category(array(
                "class" => "smile",
                "span"  => "Врачи",
                "h5"    => "База врачей",
                "p"     => "Добавить, изменить, удалить данные о враче",
                "a"     => "Открыть",
                "href"  => "doctor/doctor"
                )) }}
                {{ Form::category(array(
                "class" => "check",
                "span"  => "Специальности",
                "h5"    => "База специальностей",
                "p"     => "Добавить, изменить, удалить специальности",
                "a"     => "Открыть",
                "href"  => "doctor/speciality"
                )) }}
                {{ Form::category(array(
                "class" => "home",
                "span"  => "Объекты",
                "h5"    => "База объектов",
                "p"     => "Добавить, изменить, удалить объекты",
                "a"     => "Открыть",
                "href"  => "doctor/object"
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

@include("switch")

@stop