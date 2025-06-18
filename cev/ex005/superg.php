<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Superglobais 2</title>
</head>
<body>
    <main>
        <pre>
            <?php 
                $dia = date('l');
                setcookie("dds", $dia, time() + 3600 );
                session_start();
                $_SESSION["teste"] = "FUNCIONOU"; 
                echo "<h1>superGlobal GET</h1>";
                var_dump($_GET);
                echo "<h1>superGlobal POST</h1>";
                var_dump($_POST);
                echo "<h1>superGlobal REQUEST</h1>";
                var_dump($_REQUEST);
                echo "<h1>superGlobal COOKIE</h1>";
                var_dump($_COOKIE);
                echo "<h1>superGlobal SESSION</h1>";
                var_dump($_SESSION);
                echo "<h1>superGlobal SERVER</h1>";
                var_dump($_SERVER);
            ?>
        </pre>
    </main>
</body>
</html>