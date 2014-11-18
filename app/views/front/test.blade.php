@extends('layout')
@section('header')
@stop
@section('content')

<div class="container">
    <div class="row">
        <div class="span9">
            <table class="table table-bordered">
                <th>Head</th>
                <th>Head2</th>
                <tr>
                    <td>
                        Cell
                    </td>
                    <td>
                        Cell2
                    </td>
                </tr>
            </table>
        </div>

        <div class="span3">
            {{ Form::paginator(array(
                "items" => array("1" => "One", "2" => "Two"),
            )) }}
        </div>
    </div>
    <div class="row">
        <div class="span9">
            {{ Form::breadcrumbs(array(
                "items" => array("1" => "One", "2" => "Two", "3" => "Three"),
                "active" => "Three"
            )) }}
        </div>

        <div class="span3">
            {{ Form::dropdown(array(
                "head"      => "SuperMenu",
                "items"     => array("1" => "One", "2" => "Two", "3" => "Three")
            )) }}
        </div>
    </div>

    <div class="row">
        <div class="span9">
            <ul class="thumbnails">
                <li class="span3">
                    <div class="thumbnail">
                        <img data-src="holder.js/300x200" alt="">
                        <h3>Thumbnail label</h3>
                        <p>Thumbnail caption...</p>
                    </div>
                </li>
                <li class="span3">
                    <div class="thumbnail">
                        <img data-src="holder.js/300x200" alt="">
                        <h3>Thumbnail label</h3>
                        <p>Thumbnail caption...</p>
                    </div>
                </li>
                <li class="span3">
                    <div class="thumbnail">
                        <img data-src="holder.js/300x200" alt="">
                        <h3>Thumbnail label</h3>
                        <p>Thumbnail caption...</p>
                    </div>
                </li>
            </ul>
        </div>

        <div class="span3">
            <div class="well">
                ...
            </div>
            <div class="well">
                ...
            </div>
            <div class="well">
                ...
            </div>
            <div class="progress progress-success">
                <div class="bar" style="width: 40%"></div>
            </div>
            <div class="well">
                ...
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span6">
            <div class="progress progress-success">
                <div class="bar" style="width: 40%"></div>
            </div>
        </div>
        <div class="span6">
            <div class="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Warning!</strong> Best check yo self, you're not looking too good.
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span4">
        </div>
        <div class="span8">
            {{ Form::table(array(
                "size"  => count($head),
                "head"  => $head,
                "rows"  => $rows,
            )) }}
        </div>
    </div>
    <div class="row">
        <div class="span6">

        </div>
        <div class="span6">

        </div>
    </div>
</div>

@include("switch")
@stop