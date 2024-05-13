<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AWS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>AWS</h1>
    </header>
    <main>
        <section id="login">
            <h2>Modulo di login</h2>
            <form id="loginForm" action="login.php" method="post">
                <label for="username">Nome utente:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required> <br> <br>

                <button type="submit">Accedi</button>
            </form>
        </section>
    </main>
</body>
</html>