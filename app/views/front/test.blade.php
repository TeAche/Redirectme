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
            <div class="pagination">
                <ul>
                    <li><a href="#">Prev</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span9">
            <ul class="breadcrumb">
                <li><a href="#">Home</a> <span class="divider">/</span></li>
                <li><a href="#">Library</a> <span class="divider">/</span></li>
                <li class="active">Data</li>
            </ul>
        </div>

        <div class="span3">
            <ul class="nav nav-tabs">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Menu
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                </li>
            </ul>
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
        <div class="span6">
            {{ Form::table(array(
                "size"  => 2,
                "head"  => array("head1", "head2"),
                "rows"  => array("row11", "row12", "row21", "row22", "row31", "row32")
            )) }}
        </div>
        <div class="span6">
            {{ Form::table(array(
                "size"  => count($head),
                "head"  => $head,
                "rows"  => $rows
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