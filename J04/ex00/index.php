<?php
	session_start();
?>
<html><body>
<?php
	if ($_GET['submit'] != NULL)
	{
		if ($_GET['login'] != NULL)
			$_SESSION['login'] = $_GET['login'];
		if ($_GET['passwd'] != NULL)
			$_SESSION['passwd'] = $_GET['passwd'];
	}
?>
<form action="index.php" method="get">
	Identifiant: <input type="text" name="login" value="<?php echo $_SESSION['login']?>"/>
	<br />
	Mot de passe: <input type="passwd" name="passwd" value="<?php echo $_SESSION['passwd']?>"/>
	<input type="submit" name="submit" value="OK">
</form>
</body></html>
