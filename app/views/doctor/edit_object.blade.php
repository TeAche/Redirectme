@extends("layout")
@section("header")
@stop
@section("content")
<!-- Object Section -->
<div id="about" class="section section-expand">
    <div class="section-title"><a href="{{ URL::route("doctor/object") }}"><i class="icon-home"></i></a><strong>Изменить</strong>
        <p><span>Объект</span></p>
    </div>

    <!-- Edit Object Content -->
    <div class="container">
        <hr />

        <div class="row">
            <div class="span12">

                <h2>Изменить <span>объект</span></h2>
                {{ Form::open(array(
                "url"           => URL::full(),
                "autocomplete"  => "off",
                "class"         => "contact-form"
                )) }}
                <fieldset>
                    {{ Form::field(array(
                    "name"          => "title",
                    "label"         => "Объект",
                    "form"          => $form,
                    "placeholder"   => "ГЦЗ №1",
                    "value"         => $object->title,
                    "class"         => "span3"
                    )) }}

                    {{ Form::submit("Сохранить", array("class" => "btn btn-large")) }}

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