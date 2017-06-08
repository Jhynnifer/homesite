@if(config('app.env') != 'production')

    <div id="breakpoint" class="p-1 rounded" style="position: fixed; bottom: 5px; left: 5px; background-color: #222; z-index: 999; ">

        <div class="hidden-sm-up">XS</div>
        <div class="hidden-md-up hidden-xs-down">SM</div>
        <div class="hidden-lg-up hidden-sm-down">MD</div>
        <div class="hidden-xl-up hidden-md-down">LG</div>
        <div class="hidden-lg-down">XL</div>

    </div>

@endif
