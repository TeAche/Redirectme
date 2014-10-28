@extends('layout')
@section('content')
    @if (count($groups))
    <div id="login" class="section">
            @foreach ($groups as $group)
            {{ $group->name }}
                <a href="{{ URL::route("group/edit") }}?id={{ $group->id }}">edit</a>
                <a href="{{ URL::route("group/delete") }}?id={{ $group->id }}" class="confirm" data-confirm="Are you sure you want to delete this group?">delete</a>
            @endforeach
    @else
        <p>There are no groups.</p>
    @endif
    <a href="{{ URL::route("group/add") }}">add group</a>
    </div>
@stop
@section('footer')
    @parent
    <script type="text/javascript" src="{{ URL::asset("js/layout.js") }}"></script>
@stop