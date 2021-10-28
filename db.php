<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $con = mysqli_connect("localhost","root","","accounts");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
<?php 
session_start();
if (isset($_POST['submit'])) {
	@$username=htmlentities($_POST['username']);
	@$password =md5(htmlentities($_POST['password']));
	//se connecter a la base de données 
		$bdd=new PDO('mysql:host=localhost;dbname=accounts;charset=utf8','root','',array(PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	
	$req=$bdd->prepare('SELECT * FROM users WHERE username=? AND password=? ');
	$req ->execute(array( @$username ,@$password));
	$users=$req->fetch();
	
		if ($users['username'] && $users['password']) {
		
		
			$_SESSION['email']=$users['email'];
			$_SESSION['username']=$users['username'];
		
			$_SESSION['password']=$users['password'];
	
			}
		
	}

?>	