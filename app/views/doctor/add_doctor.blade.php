@extends('layout')
@section('header')
@stop
@section('content')
<!-- Services Section -->
<div id="about" class="section section-expand">
    <div class="section-title"><a href="{{ URL::route("doctor/doctor") }}"><i class="icon-smile"></i></a><strong>Добавить</strong>
        <p><span>Информацию о враче</span></p>
    </div>

    <!-- Add Doctor Content -->
    <div class="container">
        <hr />

        <div class="row">
            <div class="span12">

                <h2>Добавить <span>врача</span></h2>
                {{ Form::open(array(
                "route"         => "doctor/doctor/add",
                "autocomplete"  => "off",
                "class"         => "contact-form"
                )) }}
                <fieldset>
                    {{ Form::field(array(
                    "name"          => "firstname",
                    "label"         => "Имя врача",
                    "form"          => $form,
                    "placeholder"   => "Иван",
                    "class"         => "span3"
                    )) }}

                    {{ Form::field(array(
                    "name"          => "lastname",
                    "label"         => "Фамилия врача",
                    "form"          => $form,
                    "placeholder"   => "Иванов",
                    "class"         => "span3"
                    )) }}

                    {{ Form::field(array(
                    "name"          => "middlename",
                    "label"         => "Отчество врача",
                    "form"          => $form,
                    "placeholder"   => "Иванович",
                    "class"         => "span3"
                    )) }}

                    {{ Form::submit("Создать", array("class" => "btn btn-large")) }}

                    <!---{{ Form::field(array(
                    "type"          => "checkbox",
                    "name"          => "secure",
                    "label"         => "Защищено",
                    "form"          => $form,
                    "value"         => true,
                    "class"         => "span3"
                    )) }}-->

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