<?php include('include/head.php'); ?>
<?php include('include/navbar.php'); ?>
<?php include('include/sidebar.php'); ?>
<?php include('include/footer.php'); ?>

<body>
<div class="w3-panel w3-red w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-red w3-large w3-display-topright">&times;</span>
    <h3>Danger!</h3>
    <p>Red often indicates a dangerous or negative situation.</p>
</div>

<div class="w3-panel w3-yellow w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-yellow w3-large w3-display-topright">&times;</span>
    <h3>Warning!</h3>
    <p>Yellow often indicates a warning that might need attention.</p>
</div>

<div class="w3-panel w3-green w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-green w3-large w3-display-topright">&times;</span>
    <h3>Success!</h3>
    <p>Green often indicates something successful or positive.</p>
</div>

<div class="w3-panel w3-blue w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-blue w3-large w3-display-topright">&times;</span>
    <h3>Info!</h3>
    <p>Blue often indicates a neutral informative change or action.</p>
</div>
</body>

