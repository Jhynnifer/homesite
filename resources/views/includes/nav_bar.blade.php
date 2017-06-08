
<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>
</div>
<div class="container">
    <div class="row d-flex align-items-center">
        <div class="col-6 d-flex justify-content-end">
            <img src="/images/ph-logo.svg" class="logo mr-lg-auto" alt="JCCDesignworks" />
        </div>
        <div class="col-6 d-flex justify-content-end">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        </div>
    </div>
</div>

<script>
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
</script>

