@extends('layout')
@section('content')
    <div id="group" class="section">
        {{Form::open(array(
            "route" => "user/login",
            "autocomplete"  => "off",
        ))}}
            {{Form::label("username", "Username")}}
            {{Form::text("username", Input::old("username"), array("placeholder" => "john.doe"))}}
            {{Form::label("password", "Password")}}
            {{Form::password("password", array("placeholder" => "******"))}}
        @if ($error = $errors->first("password"))
            <div class="error">
                {{$error}}
            </div>
        @endif
            {{Form::submit("Log in")}}
        {{Form::close()}}
    </div>
@stop