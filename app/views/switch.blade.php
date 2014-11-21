@section("switch")
<!-- Switch Section -->
<div class="switch-section">
    <p class="switch-section-cont">
        <a href="{{ URL::route("front/index") }}" class="section-home {{ (Route::getCurrentRoute()->getPath() == "/") ? "active" : "" }}">
        <span class="icon-home"></span>
        </a>
        <a href="{{ URL::route('doctor/index') }}" class="section-about {{ (Route::getCurrentRoute()->getPath() == "doctor/index") ? "active" : "" }}">
        <span class="icon-smile"></span>
        </a>
        <a href="{{ URL::route('product/index') }}" class="section-services  {{ (Route::getCurrentRoute()->getPath() == "product") ? "active" : "" }}">
        <span class="icon-th-list"></span>
        </a>
        <a href="#" class="section-folio {{ (Route::getCurrentRoute()->getPath() == "analyse") ? "active" : "" }}">
        <span class="icon-briefcase"></span>
        </a>
        <a href="#" class="section-blog {{ (Route::getCurrentRoute()->getPath() == "user") ? "active" : "" }}">
        <span class="icon-user"></span>
        </a>
        <a href="{{ URL::route("service/index") }}" class="section-contact {{ (Route::getCurrentRoute()->getPath() == "service") ? "active" : "" }}">
        <span class="icon-cog"></span>
        </a>
    </p>
</div>
<a href="#" class="section-close">×</a>
@show