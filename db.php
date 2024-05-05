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
// Definisci la variabile $offset per tenere traccia del numero di risultati già visualizzati
$offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;

// Query per selezionare i risultati dalla tabella "users" con un offset e limitare a 5 risultati
$sql = "SELECT * FROM users LIMIT $offset, 5 ";
$result = $conn->query($sql);

$limit = 6; // Numero di risultati per pagina

// Query SQL per la sezione dei video postati dagli utenti
$sql_videos = "SELECT 
            
             `users`.`username` AS `user_posted_video`, 
             COUNT(*) AS `posted_videos`
           FROM 
             `users`
           JOIN 
             `posts` ON `user_id` = `users`.`id`
           JOIN 
             `media_post` ON `post_id` = `posts`.`id`
           JOIN 
             `medias` ON `media_id` = `medias`.`id`
           WHERE 
             `medias`.`type` = 'video'
           GROUP BY 
             `users`.`username`
           ORDER BY 
             `posted_videos` DESC
           LIMIT $limit OFFSET $offset";

$result_videos = $conn->query($sql_videos);

// Chiusura della connessione al database
$conn->close();
