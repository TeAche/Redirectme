

{{ Form::open(array(
    "url"           => URL::full(),
    "autocomplete"  => "off"
)) }}

{{ Form::field(array(
    "name"          => "name",
    "label"         => "Resource",
    "form"          => $form,
    "placeholder"   => "new resource",
    "value"         => $resource->name
)) }}

{{ Form::submit("save") }}

{{ Form::close() }}
