<br>
<div class="w3-content w3-display-container">
    <div class="w3-display-container mySlides">
        <img src="img/slide1.jpg" style="width:100%">
        <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
            2017, Silverstone nr1
        </div>
    </div>

    <div class="w3-display-container mySlides">
        <img src="img/slide1.jpg" style="width:100%">
        <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
            2017, Silverstone nr2
        </div>
    </div>
    <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }
</script>

