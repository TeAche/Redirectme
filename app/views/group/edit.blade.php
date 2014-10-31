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
            <div class="span12">

                <h2>Изменить <span>доступ</span></h2>
                {{ Form::open(array(
                    "url"           => URL::full(),
                    "autocomplete"  => "off",
                    "class"         => "contact-form"
                )) }}
                <fieldset>
                    {{ Form::field(array(
                        "name"          => "name",
                        "label"         => "Имя группы",
                        "form"          => $form,
                        "placeholder"   => "admin",
                        "value"         => $group->name,
                        "class"         => "span3"
                    )) }}

                    @include('user/assign')
                    @include('resource/assign')

                    {{ Form::submit("Сохранить", array("class" => "btn-large btn")) }}
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

<!-- Switch Section -->
<div class="switch-section">
    <p class="switch-section-cont"><a href="{{ URL::route("front/index") }}" class="section-home {{ (Route::getCurrentRoute()->getPath() == "/") ? "active" : "" }}"><span class="icon-home"></span></a> <a href="#" class="section-about {{ (Route::getCurrentRoute()->getPath() == "doctor") ? "active" : "" }}"><span class="icon-smile"></span></a> <a href="#" class="section-services  {{ (Route::getCurrentRoute()->getPath() == "specimen") ? "active" : "" }}"><span class="icon-th-list"></span></a> <a href="#" class="section-folio {{ (Route::getCurrentRoute()->getPath() == "analyse") ? "active" : "" }}"><span class="icon-briefcase"></span></a> <a href="#" class="section-blog {{ (Route::getCurrentRoute()->getPath() == "user") ? "active" : "" }}"><span class="icon-user"></span></a> <a href="{{ URL::route("service/index") }}" class="section-contact {{ (Route::getCurrentRoute()->getPath() == "service") ? "active" : "" }}"><span class="icon-cog"></span></a></p>
</div>
<a href="#" class="section-close">?</a>
@stop