@extends('layout')
@section("header")
@stop
@section('content')
<!-- Product Section -->
<div id="services" class="section section-expand">
    <div class="section-title"><a href="{{ URL::route("product/product") }}"><i class="icon-th-list"></i></a><strong>Изменить</strong>
        <p><span>Инфо о продукте</span></p>
    </div>

    <!-- Product Content -->
    <div class="container">
        <hr />

        <div class="row">
            {{ Form::open(array(
            "url"           => URL::full(),
            "autocomplete"  => "off",
            "class"         => "contact-form"
            )) }}
            <div class="span12">

                <h2>Изменить <span>продукт</span></h2>


                    {{ Form::field(array(
                    "name"          => "title",
                    "label"         => "Название",
                    "form"          => $form,
                    "placeholder"   => "Вегацеф",
                    "value"         => $product->title,
                    "class"         => "span3"
                    )) }}

                    {{ Form::submit("Сохранить", array("class" => "btn-large btn")) }}

                    {{ Form::close() }}

            </div>

        </div>
    </div>
    <!-- Service Slogan -->
    <h2><span>НЕ ТРОГАТЬ</span></h2>
    <p class="lead">Если ты не знаешь для чего эти настройки, <span>не трогай тут ничего</span> это раздел администратора.<br />
        Если ты хочешь что-то <span>изменить</span> свяжись с техником или администратором для подробной информации.</p>
</div>

@include("switch")

@stop