<?php
include 'includes/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (registerUser($username, $password)) {
        header("Location: login.php");
    } else {
        $error = "Errore durante la registrazione. Riprova.";
    }
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Registrazione</title>
</head>
<body>
    <div class="container">
        <h2>Registrazione</h2>
        <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
        <form method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Registrati">
        </form>
        <p>Hai già un account? <a href="login.php">Accedi</a></p>
    </div>
</body>
</html>
