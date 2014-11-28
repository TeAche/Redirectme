@extends('layout')
@section('header')
@stop
@section('content')
<!-- Product Section -->
<div id="about" class="section section-expand">
    <div class="section-title"><i class="icon-smile"></i><strong>Список</strong>
        <p><span>Продуктов</span></p>
    </div>

    <!-- Product Content -->
    <div class="container">
        <hr />
        <h1 class="main-title">Выберите <span>категорию</span></h1>
        <p class="lead">для дальнейшей работы с продуктами</p>
        <div class="flexslider">

            <!-- Services List Carousel -->
            <ul class="thumbnails slides">

                <!-- Service Detail -->
                {{ Form::category(array(
                "class" => "th-list",
                "span"  => "Продукты",
                "h5"    => "Список продуктов",
                "p"     => "Добавить, изменить, удалить данные о продукте",
                "a"     => "Открыть",
                "href"  => "product/product"
                )) }}
                {{ Form::category(array(
                "class" => "home",
                "span"  => "Форма",
                "h5"    => "Формы продуктов",
                "p"     => "Добавить, изменить, удалить формы",
                "a"     => "Открыть",
                "href"  => "product/form"
                )) }}
                {{ Form::category(array(
                "class" => "home",
                "span"  => "Объекты",
                "h5"    => "База объектов",
                "p"     => "Добавить, изменить, удалить объекты",
                "a"     => "Открыть",
                "href"  => "product/dosage"
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