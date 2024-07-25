<?php 
// Creare una funzione che generi una password;
function pass_generator($num) {
    // Definiamo una variabile che contenga i caratteri da generare;
    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';

    // Ritorniamo il valore della funzione che estrapolerà un password in base al numero di caratteri passati nella funzione;
    return substr(str_shuffle($data),0,$num);
}

// Verificare se il form è stato inviato e se 'numeri' è settato
if (isset($_GET['bottone']) && isset($_GET['numeri']) && ($_GET['numeri'] <= 32 && $_GET['numeri'] >= 8)) {
    // Prendere il valore dell'input 'numeri' e verificare che sia un numero
    $num_characters = intval($_GET['numeri']);
    // Generare la password    
    $generated_password = pass_generator($num_characters);
} else {
    $generated_password = 'Usa min 8 caratteri e max 32';
}
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