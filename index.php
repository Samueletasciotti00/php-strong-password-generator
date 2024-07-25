<?php 

// Inclusione della pagina delle funzioni in php index;
require_once __DIR__  . '/functions.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <!-- Style -->
    <style>
        /* General */
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-align: center;
        }

        form{
            display: flex;
            flex-direction: column;
            align-items: center;
            align-content: center;
            justify-content: space-around;
            margin: 20vh auto;
            gap: 20px;
        }

        /* Paragraph */

        p{  
            color: red;
            font-size: 30px;
        }

        /* Button */
        button{
            padding: 10px 30px;
            border-radius: 10px;
            background-color: #5b6f2b;
        }

    </style>
</head>
<body>

    <!-- Titol -->
    <h1>Password Generator</h1>

    <!-- Form Con chiamata in GET -->
    <form method="GET">
        
        <!-- Input utente per generare una Password -->
        <input type="number" name="numeri">

        <!-- Tasto per invio del form -->
        <button type="submit" name="bottone">Invia</button>

        <p> <?php echo htmlspecialchars($generated_password) ?></p>
    </form>
</body>
</html>