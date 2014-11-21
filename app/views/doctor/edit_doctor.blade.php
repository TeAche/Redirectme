@extends("layout")
@section("header")
@stop
@section("content")
<!-- Services Section -->
<div id="about" class="section section-expand">
    <div class="section-title"><a href="{{ URL::route("doctor/doctor") }}"><i class="icon-smile"></i></a><strong>Изменить</strong>
        <p><span>Информацию о враче</span></p>
    </div>

    <!-- Edit Doctor Content -->
    <div class="container">
        <hr />

        <div class="row">
            <div class="span12">

                <h2>Изменить <span>врача</span></h2>
                {{ Form::open(array(
                "url"           => URL::full(),
                "autocomplete"  => "off",
                "class"         => "contact-form"
                )) }}
                <fieldset>
                    {{ Form::field(array(
                    "name"          => "firstname",
                    "label"         => "Имя врача",
                    "form"          => $form,
                    "placeholder"   => "Иван",
                    "value"         => $doctor->firstname,
                    "class"         => "span3"
                    )) }}

                    {{ Form::field(array(
                    "name"          => "lastname",
                    "label"         => "Фамилия врача",
                    "form"          => $form,
                    "placeholder"   => "Иванов",
                    "value"         => $doctor->lastname,
                    "class"         => "span3"
                    )) }}

                    {{ Form::field(array(
                    "name"          => "middlename",
                    "label"         => "Отчество врача",
                    "form"          => $form,
                    "placeholder"   => "Иванович",
                    "value"         => $doctor->middlename,
                    "class"         => "span3"
                    )) }}

                    {{ Form::submit("Сохранить", array("class" => "btn btn-large")) }}

                    <div class="span4" style="margin-top: 10px; margin-left: 0px;">
                        {{ Form::select("object_id", $objects, $doctor->object->id) }}
                    </div>
                    <div class="span4" style="margin-top: 10px; margin-left: -50px;">
                        {{ Form::select("speciality_id", $specialities, $doctor->speciality->id) }}
                    </div>
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