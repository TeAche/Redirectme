@extends('layout')
@section('content')
{{ Form::open(array(
"url"           => URL::route("user/reset") . $token,
"autocomplete"  => "off",
)) }}
    @if ($error = $errors->first("token"))
        <div class="error">
            {{$error}}
        </div>
    @endif

    {{ Form::label("email", "Email") }}
    {{ Form::text("email", Input::get("email"), array("placeholder" => "john.doe@example.com")) }}

    @if ($error = $errors->first("password"))
        <div class="error">
            {{$error}}
        </div>
    @endif

    {{ Form::label("password", "Password") }}
    {{ Form::password("password", array("placeholder" => "******")) }}

    @if ($error = $errors->first("password"))
        <div class="error">
            {{ $error }}
        </div>
    @endif

    {{ Form::label("password_confirmation", "Confirm") }}
    {{ Form::password("password_confirmation", array("placeholder" => "******")) }}

    @if ($error = $errors->first("password_confirmation"))
        <div class="error">
            {{ $error }}
        </div>
    @endif

    {{ Form::submit("reset") }}
{{Form::close()}}
@stop
@section('footer')
@parent
    <script src="//polyfill.io"></script>
@stop