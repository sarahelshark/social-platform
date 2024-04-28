<!DOCTYPE html>
<html>
<head>
    <title>Social Platform</title>
</head>
<body>

<?php

//  accesso al database
$servername = "localhost"; 
$username = "root"; 
$password = "root"; 
$dbname = "social_platform"; 

//  Connessione al database
$conn = new mysqli($servername, $username, $password, $dbname);

//  Controllo della connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

//  Query per selezionare tutti i dati dalla tabella "users", test 
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Se ci sono risultati, ovvero se le rows sono >0...
if ($result->num_rows > 0) {
    // ...allora dammi gli output dei dati di ogni riga
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nome: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
    }
} 

// Chiusura della connessione al database
$conn->close();
?>

</body>
</html>
