@extends('layout')
@section('header')
@stop
@section('content')
<!-- Services Section -->
<div id="contact" class="section section-expand">
    <div class="section-title"><a href="{{ URL::route("group/index") }}"><i class="icon-lock"></i></a><strong>Создать</strong>
        <p><span>Создание группы</span></p>
    </div>

    <!-- Contact Content -->
    <div class="container">
        <hr />

        <div class="row">
            <div class="span12">

                <h2>Создать <span>группу</span></h2>
                {{ Form::open(array(
                "route"         => "group/add",
                "autocomplete"  => "off",
                "class"         => "contact-form"
                )) }}
                <fieldset>
                    {{ Form::field(array(
                    "name"          => "name",
                    "label"         => "Имя группы",
                    "form"          => $form,
                    "placeholder"   => "admin",
                    "class"         => "span8"
                    )) }}

                    {{ Form::submit("Создать", array("class" => "btn btn-large")) }}
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