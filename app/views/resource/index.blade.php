@extends("layout")
@section('header')
@stop
@section("content")
<!-- Services Section -->
<div id="contact" class="section section-expand">
    <div class="section-title"><i class="icon-road"></i><strong>Маршруты</strong>
        <p><span>Ресурсов сайта</span></p>
    </div>

    <!-- Services Content -->
    <div class="container">
        <div class="tabs">
            <ul class="tab-links">
                <li class="active"><a href="#tab1">Создать</a></li>
                <li><a href="#tab2">Редактировать №1</a></li>
                <li><a href="#tab3">Редактировать №2</a></li>
                <li><a href="#tab4">Дополнительно</a></li>
            </ul>

            <div class="tab-content">
                <div id="tab1" class="tab active">
                    <ul class="thumbnails">
                        <li class="span4">
                            <div class="thumbnail">
                                <img data-src="holder.js/300x200" alt="">
                                <h3>Создать маршрут</h3>
                                <a href="{{ URL::route("resource/add") }}" class="btn goto-folio">Создать</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div id="tab2" class="tab">
                    <h1 class="main-title">Выберите <span>маршрут</span></h1>

                    <ul class="thumbnails">
                        @foreach($resources as $resource)
                        <li class="span4">
                            <a href="{{ URL::route("resource/edit") . "?id=" . $resource->id }}">
                            <div class="thumbnail">
                                <img data-src="holder.js/300x200" alt="">
                                <h4>{{ $resource->id . ". " . $resource->name }}</h4>
                            </div>
                            </a>
                            <div class="custom-icon"><a href="{{ URL::route("resource/delete") . "?id=" . $resource->id }}"><h4>X</h4></a></div>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div id="tab3" class="tab">
                    <p>Tab #3 content goes here!</p>
                    <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum ri.</p>
                </div>

                <div id="tab4" class="tab">
                    <p>Tab #4 content goes here!</p>
                    <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
                </div>
            </div>
        </div>


        <hr />
        <div class="row">
            <div class="span8">
                {{ Form::table(array(
                    "size" => count($head),
                    "head" => $head,
                    "rows" => $rows,
                    "baseroute" => "resource",
                    "edit" => true,
                    "delete" => true
                )) }}
            </div>
        </div>
    </div>
        <hr />

        <!-- Service Slogan -->
        <h2><span>НЕ ТРОГАТЬ</span></h2>
        <p class="lead">Если ты не знаешь для чего эти настройки, <span>не трогай тут ничего</span> это раздел администратора.<br />
            Если ты хочешь что-то <span>изменить</span> свяжись с техником или администратором для подробной информации.</p>

</div>

@include("switch")

@stop
