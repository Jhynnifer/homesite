<div id="main_header">
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
        </div>
    </div>
    {{--<img src="http://placekitten.com/2600/800" width="100%">--}}

    <div style="background-image: url('http://placekitten.com/2600/800'); background-size: cover; height: 800px; ">
    <div class="container pt-3">
        <div class="row" id="jc-navbar">
            <div class="col-8 d-flex align-items-center justify-content-md-start">
                <img src="/images/ph-logo.svg" class="logo" alt="JCCDesignworks" />
            </div>
            <div class="col-4 d-flex align-items-center justify-content-end">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            </div>
        </div>
    </div>
    </div>
</div>

@push('scripts')
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
{{--
    <script>
        $(document).ready(function () {

            $(window).scroll(function () {

                console.log($(window).scrollTop());

                if ($(window).scrollTop() > 960) {
                    $('#jc-navbar').addClass('jc-navbar-fixed');
                }

                if ($(window).scrollTop() < 960) {
                    $('#jc-navbar').removeClass('jc-navbar-fixed');
                }
            });
        });
    </script>--}}

@endpush
