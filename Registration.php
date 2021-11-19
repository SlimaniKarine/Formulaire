<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="icon" href="images/logo.png" type="image/png">

</head>
<body>



<form id="form" action="Inscription.php" method="post">
        <h1 class="login-title">Inscription</h1>
        <div class="inputs">
        <input type="text" class="login-input" id="username" name="username" placeholder="Identifiant" required />
        <input type="text" class="login-input" id="email" name="email" placeholder="Adresse e-mail" required>
        <input type="password" class="login-input" id="password" name="password" placeholder="Mot de passe" required>
        <div align="center" class="buttons">
        <button type="submit">S'inscrire</button>
    </div>
    </div>
        <p class="link"><a href="index.php" style="color: #eb7371">Connexion</a></p>
    
    </form>
    
</body>
</html>