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