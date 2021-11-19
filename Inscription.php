<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="icon" href="images/logo.png" type="image/png">

</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "INSERT into `users` (username, password, email)
                     VALUES ('$username', '" . md5($password) . "', '$email')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Inscription réussie!</h3><br/>
                  <p class='link'>Cliquez ici pour <a href='index.php' >Se connecter </span></a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Veuillez remplir tous les champs.</h3><br/>
                  <p class='link'>Cliquez ici pour <a href='Inscription.php'>s'inscrire</a> de nouveau</p>
                  </div>";
        }
    } else {
?>
    <form id="form" action="" method="post">
        <h1 class="login-title">Inscription</h1>
        <div class="inputs">
        <input type="text" class="login-input" name="username" placeholder="Identifiant" required />
        <input type="text" class="login-input" name="email" placeholder="Adresse e-mail">
        <input type="password" class="login-input" name="password" placeholder="Mot de passe">
        <div align="center" class="buttons">
        <button type="submit">S'inscrire</button>
    </div>
    </div>
        <p class="link"><a href="index.php" style="color: #eb7371">Connexion</a></p>
    
    </form>
<?php
    }
?>
</body>
</html>
