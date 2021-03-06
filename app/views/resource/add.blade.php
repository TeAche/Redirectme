@extends('layout')
@section('header')
@stop
@section('content')
<!-- Services Section -->
<div id="contact" class="section section-expand">
    <div class="section-title"><a href="{{ URL::route("resource/index") }}"><i class="icon-road"></i></a><strong>Маршруты</strong>
        <p><span>Ресурсов сайта</span></p>
    </div>

    <!-- Contact Content -->
    <div class="container">
        <hr />

        <div class="row">
            <div class="span12">

                <h2>Создать <span>маршрут</span></h2>
                {{ Form::open(array(
                    "route"         => "resource/add",
                    "autocomplete"  => "off",
                    "class"         => "contact-form"
                )) }}
            <fieldset>
                {{ Form::field(array(
                    "name"          => "name",
                    "label"         => "Имя маршрута",
                    "form"          => $form,
                    "placeholder"   => "user/profile",
                    "class"         => "span3"
                )) }}

                {{ Form::field(array(
                    "name"          => "pattern",
                    "label"         => "Паттерн маршрута",
                    "form"          => $form,
                    "placeholder"   => "/user/profile",
                    "class"         => "span3"
                )) }}

                {{ Form::field(array(
                    "name"          => "target",
                    "label"         => "Таргет маршрута",
                    "form"          => $form,
                    "placeholder"   => "UserController@profileAction",
                    "class"         => "span3"
                )) }}

                {{ Form::submit("Создать", array("class" => "btn btn-large")) }}

                {{ Form::field(array(
                    "type"          => "checkbox",
                    "name"          => "secure",
                    "label"         => "Защищено",
                    "form"          => $form,
                    "value"         => true,
                    "class"         => "span3"
                )) }}

            </fieldset>
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