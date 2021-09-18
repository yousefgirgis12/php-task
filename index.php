<?php
session_start();

if(isset($_SESSION['username'])){
$_SESSION['msg']="You must log in first to view this page";
header("location : login.php");
}
if(isset($_GETA['logout'])){
session_destroy();
unset($_SESSION['username']);
header("location : login.php");
}
?>
<DOCTYPE html>
	<html>
	<head>
		<title>
			Home page
		</title>	
	</head>
	<h1>This is the hopmepage</h1>
	<body>
	<?if(isset($_SESSIOIN['success'])) : ?>
	<div>
	   <h3>
               <?php
                   unset($_SESSION['success']);
                ?>
       </h3>
    </div>
<?php if (isset($_SESSION['username']))  : ?>
	<h3>wlcome<strong><?php echo $_SESSION['username']; ?></strong></h3>

<button><a href="index.php?logout='1"></a></button>

<?php endif ?>
</body>
</html>