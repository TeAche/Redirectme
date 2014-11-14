@extends("layout")
@section("content")
<!-- Pages Navigation -->
<div id="about" class="section"><a href="{{ URL::route('doctor/index') }}">
        <div class="section-title"><i class="icon-smile"></i><strong>Врачи</strong>
            <p><span>База врачей</span></p>
        </div>
    </a></div>
<div id="services" class="section"><a href="#">
        <div class="section-title"><i class="icon-th-list"></i><strong>Препараты</strong>
            <p><span>Список</span></p>
        </div>
    </a></div>
<div id="folio" class="section"><a href="#">
        <div class="section-title"><i class="icon-briefcase"></i><strong>Выписка</strong>
            <p><span>Анализ</span></p>
        </div>
    </a></div>
<div id="blog" class="section"><a href="#">
        <div class="section-title"><i class="icon-user"></i><strong>Сотрудники</strong>
            <p><span>База МП</span></p>
        </div>
    </a></div>
<div id="contact" class="section"><a href="{{ URL::route("service/index") }}">
        <div class="section-title"><i class="icon-cog"></i><strong>Параметры</strong>
            <p><span>Настройка</span></p>
        </div>
    </a></div>
@stop