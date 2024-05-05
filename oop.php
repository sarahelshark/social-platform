<?php
// Include le classi Media e Post
require_once 'Models/Post.php';
require_once 'Models/Media.php';

// Creazione di un oggetto Media
$media = new Media('image', 'https://picsum.photos/200/300');

// Creazione di un oggetto Post utilizzando l'oggetto Media
$post = new Post('Titolo prova', ['test', 'classenuova'], 118);

// Utilizzo dei metodi per ottenere le proprietà dei post e dei media
echo "Titolo del post di prova: " . $post->getTitle() . "<br>";
echo "Tags: " . implode(', ', $post->getTags()) . "<br>";
echo "User ID: " . $post->getUserId() . "<br>";

echo "Tipo di media: " . $media->getType() . "<br>";
echo "Percorso del media: " . $media->getPath() . "<br>";
?>

<h1>hello</h1>