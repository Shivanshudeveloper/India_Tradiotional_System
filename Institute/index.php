<script>
var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
		if (isMobile) {
  			window.location = `./mobile.php`;
		} else {
  			window.location = `./home.php`;
		}
</script>