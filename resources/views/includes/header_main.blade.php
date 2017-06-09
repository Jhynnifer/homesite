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

    <div style="background-image: url(' {{ $image }}'); background-size: cover; height: 600px; ">
        <div class="container">
            <div class="py-3" id="jc-navbar">
                <div class="row">
                    <div class="col-8 d-flex align-items-center justify-content-md-start">
                        <img src="/images/ph-logo.svg" class="logo" alt="JCCDesignworks" />
                    </div>
                    <div class="col-4 d-flex align-items-center justify-content-end">
                        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                    </div>
                </div>
            </div>
            <div class="top-spacer" id="main_headline">
                <div class="col-11 mb-3">
                    <span>EVERY GREAT DESIGN</span>
                </div>
                <div class="col-11 mb-3">
                    <span>STARTS WITH COFFEE,</span>
                </div>
                <div class="col-11 mb-3">
                    <span>TWO COOKIES, AND</span>
                </div>
                <div class="col-11 mb-3">
                    <span>AN IDEA.</span>
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

    <script>
        $(window).scroll(function () {
            var sticky = $('.sticky'),
                scroll = $(window).scrollTop();

            if (scroll >= 100) sticky.addClass('jc-navbar-fixed');
            else sticky.removeClass('jc-navbar-fixed');
        });
    </script>

@endpush
