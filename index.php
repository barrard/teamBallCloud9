<?php include 'head.php'; ?>
<?php include 'header.php'; ?>
<?php if (isset($_GET['page'])) {
	if ($_GET['page']=='logout') {	
		include 'logout.php';
} }?>
<?php if ($loggedin){
	echo "<div id='test'></div>";
   include 'mainContent.php';
} ?>
	


<?php if (isset($_GET['page'])) {
		if ($_GET['page']=='register') {
			include 'register.php';
		}elseif ($_GET['page']=='login') {
			 include 'login.php';
		}elseif ($_GET['page']=='roaster') {
			 include 'roaster.php';
		}
	} ?>




	<script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="/js/vendor/fastclick.js"></script>
    <script src="js/foundation.min.js"></script>

    <script src="js/app.js"></script>

    <script>
      $(document).foundation();
    </script>

</body>
</html>