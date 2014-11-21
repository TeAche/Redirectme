@extends("layout")
@section('header')
@stop
@section("content")
<!-- Product Section -->
<div id="services" class="section section-expand">
    <div class="section-title"><i class="icon-th-list"></i><strong>Препараты</strong>
        <p><span>Список препаратов</span></p>
    </div>
    <!-- Product Content -->
    <div class="container">
        <div class="row">
            <div class="span3">
                <ul class="thumbnails">
                    <li class="span3">
                        <div class="thumbnail">
                            <img data-src="holder.js/300x200" alt="">
                            <h3>Создать препарат</h3>
                            <a href="{{ URL::route("product/add") }}" class="btn goto-folio">Создать</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <hr />
        @if (count($products))
        <h1 class="main-title">Выберите <span>препарат</span></h1>
        <ul class="thumbnails">
            @foreach ($products as $product)
            <li class="span3">
                <a href="{{ URL::route("product/edit") }}?id={{ $product->id }}">
                <div class="thumbnail">
                    <img data-src="holder.js/300x200" alt="">
                    <h4>{{ $product->id . ". " . $product->title }}</h4>
                </div>
                </a>
                <div class="custom-icon"><a href="{{ URL::route("product/delete") }}?id={{ $product->id }}"><h4>X</h4></a></div>
            </li>
            @endforeach
        </ul>
        <div class="row">
            <div class="span4">
                {{ Form::table(array(
                "size" => count($head),
                "head" => $head,
                "rows" => $rows,
                "baseroute" => "product",
                "edit" => true,
                "delete" => true
                )) }}
            </div>
        </div>
        @else
        <p>There are no products.</p>
        @endif
        <hr />

        <!-- Service Slogan -->
        <h2><span>НЕ ТРОГАТЬ</span></h2>
        <p class="lead">Если ты не знаешь для чего эти настройки, <span>не трогай тут ничего</span> это раздел администратора.<br />
            Если ты хочешь что-то <span>изменить</span> свяжись с техником или администратором для подробной информации.</p>

    </div>

    @include("switch")

    @stop