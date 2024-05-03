
<!doctype html>
<html lang="it">
    <head>
        <title>Social Platform</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.3.2-->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

 <style>
    body.dark-mode {
        background-color: black;
        color: #fff;
    }

    .navbar-dark .navbar-nav .nav-link {
        color: #efefee;
    }
    .navbar-dark .navbar-nav .nav-link.active {
        color: #efefee;
       } 
       .card-dark {
            background-color: #111;
            color: #fff;
            border-color: #444; 
        }
  </style>
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
    //while($row = $result->fetch_assoc()) {
   //     echo "ID: " . $row["id"]. " - Nome: " . $row["username"]. " - Email: " . $row["email"]. "<br>";
    //}
} 

// Chiusura della connessione al database
$conn->close();
?>

<div class="container-fluid p-0">
 <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Social Platform</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Friends</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="darkModeToggle">
                    <label class="form-check-label" for="darkModeToggle">Dark Mode</label>
                </div>
            </div>
        </div>
    </nav>


<!-- Main content area -->
<div class="container">
    <div class="row mt-3">
        <div class="col-md-8">
            <!-- area aggiornamenti -->
            <div class="card mb-3">
                <div class="card-header">
                    Featured [inserire screenshot simil-reels/yt shorts]
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <!-- Area per inserire il post -->
      <div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <!-- Immagine del profilo -->
                <img src="https://picsum.photos/200/200" class="img-fluid rounded-circle" alt="Immagine profilo">
            </div>
            <div class="col-10">
                <!-- Area per inserire il post nuovo -->
                <textarea class="form-control" style="width: 100%; height: 200px; resize: none;" placeholder="Scrivi il tuo post..."></textarea>
                <button type="button" class="btn btn-primary mt-2">Pubblica</button>
            </div>
        </div>
    </div>
</div>
        </div>

        <div class="col-md-4">
            <!-- Sidebar -->
            <div class="card">
                <div class="card-header">
                    Featured [inserire promozioni del social]
                </div>
                <div class="card-body p-4">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text belorem300low as a natural lead-in to additional content. Lorem ipsum dolor sit amet consectetur adipisicing elit. iure laborum ris minus ad doloremque voluptates, perferendis nesciunt voluptate! Lorem ipsum dolor sit, amet consectetur ad Sed officiis corporis quas ut ex, quam enim ratione dignissimos assumenda sapiente provident vel voluptates reprehenderit a alias. Commodi vitae animi adipisci atque ea, autem non, iure at nemo nam numquam? Asperiores sit dicta cumque, minus possimus repellat a fugiat atque? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, tenetur.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Post feed -->
     <div class="card mb-3">
                <div class="card-header">
                    I tuoi post
                </div>
                <div class="card-body">
                    <!-- Qui ppolero dinamicamente con PHP -->
                    <div class="post">
                        <h5 class="card-title">Titolo del post</h5>
                        <p class="card-text">Contenuto del post.</p>
                    </div>
                    <!-- Ripeto la struttura oper ogni post, o carosello? penso dopo -->
                </div>
            </div>
</div>
    
</div>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
  <script>
    const darkModeToggle = document.getElementById('darkModeToggle');
    darkModeToggle.addEventListener('change', () => {
        document.body.classList.toggle('dark-mode');
        const navbar = document.querySelector('.navbar');
        navbar.classList.toggle('navbar-dark', darkModeToggle.checked);
        navbar.classList.toggle('bg-dark', darkModeToggle.checked);

        // Toggle card background 
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            card.classList.toggle('card-dark', darkModeToggle.checked);
        });
    });
</script>
</body>
</html>
