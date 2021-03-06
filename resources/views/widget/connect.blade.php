
<!-- Widget Area -->
<div class="sidebar-widget-area">
    <h5 class="title">Stay Connected</h5>
    <div class="widget-content">
        <div class="social-area d-flex justify-content-around">
            @if(config('modernpug.facebook'))
                <a href="{{ config('modernpug.facebook') }}" target="_blank"><i class="fa fa-facebook"></i></a>
            @endif
            @if(config('modernpug.facebook'))
                <a href="{{ config('modernpug.slack') }}" target="_blank"><i class="fa fa-slack"></i></a>
            @endif
        </div>
    </div>
</div>