
<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
        <i class="fa fa-remove"></i>
    </a>
    <h4 class="w3-bar-item"><b>Rapporter</b></h4>
    <a class="w3-bar-item w3-button w3-hover-black" href="form.php">Register ny</a>
    <a class="w3-bar-item w3-button w3-hover-black" href="kommersnart.php">Les rapporter</a>
    <a class="w3-bar-item w3-button w3-hover-black" href="kommersnart.php">Statistikk</a>
    <a class="w3-bar-item w3-button w3-hover-black" href="kommersnart.php">Akriv</a>
</nav>
<script>
    var mySidebar = document.getElementById("mySidebar");

    var overlayBg = document.getElementById("myOverlay");

    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
            overlayBg.style.display = "none";
        } else {
            mySidebar.style.display = 'block';
            overlayBg.style.display = "block";
        }
    }

    function w3_close() {
        mySidebar.style.display = "none";
        overlayBg.style.display = "none";
    }
</script>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">
