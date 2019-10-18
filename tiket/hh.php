 <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <link href="home.css" rel="stylesheet" type="text/css">
	<input type="text" id="yourText" disabled />
<input type="checkbox" id="yourBox" />
<script>
document.getElementById('yourBox').onchange = function() {
    document.getElementById('yourText').disabled = !this.checked;
};
</script>