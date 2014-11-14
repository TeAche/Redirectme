@extends("layout")
@section('header')
@stop
@section("content")
<!-- Services Section -->
<div id="contact" class="section section-expand">
    <div class="section-title"><i class="icon-lock"></i><strong>Доступ</strong>
        <p><span>К ресурсам сайта</span></p>
    </div>

    <!-- Services Content -->
    <div class="container">
        <ul class="thumbnails">
            <li class="span4">
                <div class="thumbnail">
                    <img data-src="holder.js/300x200" alt="">
                    <h3>Создать группу</h3>
                    <a href="{{ URL::route("group/add") }}" class="btn goto-folio">Создать</a>
                </div>
            </li>
        </ul>
        <hr />
    @if (count($groups))
    <h1 class="main-title">Выберите <span>группу</span></h1>

        <ul class="thumbnails">
            @foreach ($groups as $group)
            <li class="span4">
                <a href="{{ URL::route("group/edit") }}?id={{ $group->id }}">
                    <div class="thumbnail">
                        <img data-src="holder.js/300x200" alt="">
                        <h4>{{ $group->id . ". " . $group->name }}</h4>
                    </div>
                </a>
                <div class="custom-icon"><a href="{{ URL::route("group/delete") }}?id={{ $group->id }}"><h4>X</h4></a></div>
            </li>
            @endforeach
        </ul>
    @else
        <p>There are no groups.</p>
    @endif
        <hr />

        <!-- Service Slogan -->
        <h2><span>НЕ ТРОГАТЬ</span></h2>
        <p class="lead">Если ты не знаешь для чего эти настройки, <span>не трогай тут ничего</span> это раздел администратора.<br />
            Если ты хочешь что-то <span>изменить</span> свяжись с техником или администратором для подробной информации.</p>

    </div>

    @include("switch")

@stop