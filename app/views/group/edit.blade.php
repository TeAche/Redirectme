@extends('layout')
@section("header")
@stop
@section('content')
<!-- Services Section -->
<div id="contact" class="section section-expand">
    <div class="section-title"><a href="{{ URL::route("group/index") }}"><i class="icon-road"></i></a><strong>Доступ</strong>
        <p><span>К ресурсам сайта</span></p>
    </div>

    <!-- Contact Content -->
    <div class="container">
        <hr />

        <div class="row">
            {{ Form::open(array(
            "url"           => URL::full(),
            "autocomplete"  => "off",
            "class"         => "contact-form"
            )) }}
            <div class="span12">

                <h2>Изменить <span>доступ</span></h2>

                <fieldset>
                    {{ Form::field(array(
                        "name"          => "name",
                        "label"         => "Имя группы",
                        "form"          => $form,
                        "placeholder"   => "admin",
                        "value"         => $group->name,
                        "class"         => "span3"
                    )) }}
                </fieldset>
            </div>
            <div class="row">
                <div class="span4"></div>
                <div class="span4">
                    @include('user/assign')
                    @include('resource/assign')

                    {{ Form::submit("Сохранить", array("class" => "btn-large btn")) }}

                    {{ Form::close() }}
                </div>
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