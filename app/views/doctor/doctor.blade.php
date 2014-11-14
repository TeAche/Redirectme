@extends("layout")
@section('header')
@stop
@section("content")
<!-- Doctor Section -->
<div id="about" class="section section-expand">
    <div class="section-title"><i class="icon-smile"></i><strong>Врачи</strong>
        <p><span>База врачей</span></p>
    </div>

    <!-- Doctor Content -->
    <div class="container">
        <ul class="thumbnails">
            <li class="span4">
                <div class="thumbnail">
                    <img data-src="holder.js/300x200" alt="">
                    <h3>Добавить врача</h3>
                    <a href="{{ URL::route("doctor/doctor/add") }}" class="btn goto-folio">Создать</a>
                </div>
            </li>
        </ul>
        <hr />
        <h1 class="main-title">Выберите <span>доктора</span></h1>

        <ul class="thumbnails">
            @foreach($doctors as $doctor)
            <li class="span4">
                <a href="{{ URL::route("doctor/doctor/edit") . "?id=" . $doctor->id }}">
                <div class="thumbnail">
                    <img data-src="holder.js/300x200" alt="">
                    <h4>{{ $doctor->id . ". " . $doctor->firstname }}</h4>
                </div>
                </a>
                <div class="custom-icon"><a href="{{ URL::route("doctor/doctor/delete") . "?id=" . $doctor->id }}"><h4>X</h4></a></div>
            </li>
            @endforeach
        </ul>
    </div>
    <hr />

    <!-- Service Slogan -->
    <h2><span>НЕ ТРОГАТЬ</span></h2>
    <p class="lead">Если ты не знаешь для чего эти настройки, <span>не трогай тут ничего</span> это раздел администратора.<br />
        Если ты хочешь что-то <span>изменить</span> свяжись с техником или администратором для подробной информации.</p>

</div>



@include("switch")

@stop