<!doctype html>
<html lang="it">

<head>
    <title>Social Platform</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="./main.css">

</head>

<body>

    <?php

    // Include the database connection file
    require_once 'db.php';
    ?>

    <div class="container-fluid p-0">

        <?php
        include './layout/header.php';
        ?>
        <!-- Main content area -->
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8">
                    <!-- area aggiornamenti -->
<div class="card mb-3">
    <div class="card-header">
        I più attivi della community
    </div>
    <div class="card-body">
        <h5 class="card-title">Dai una svolta alla tua giornata</h5>
        <p class="card-text">Rimani aggiornato con i video e le immagini pi&ugrave; virali della settimana, guadagna il badge di fan pi&ugrave; attivo per delle sorprese...</p>

        <!-- Utilizza la classe "row" per il layout della griglia -->
        <div class="row">
            <?php while ($row = $result_videos->fetch_assoc()) : ?>
                <div class=" col-md-4  mb-3">
                    <div class="card shadow">
                        <div class="card-body d-flex justify-content-center flex-column p-4">
                            <img src="https://picsum.photos/id/237/100/100" class="img-fluid rounded-circle" alt="Immagine profilo">
                            <h5 class="card-title mt-2"><?= $row["user_posted_video"] ?></h5>
                            <p class="card-text">Posted: <?= $row["posted_videos"] ?> videos</p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <a href="#" class="btn btn-primary">view more</a>
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
            <div class="card mb-3 mt-4">
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
                    <?php while ($row = $result->fetch_assoc()) :
                        ['id' => $id, 'username' => $username, 'email' => $email] = $row; ?>
                        <div id="<?= $id ?>">
                            <p>name: <strong> <?= $username ?> </strong>
                            </p>
                            <p>email: <strong> <?= $email ?> </strong>
                            </p>

                            </p>
                        </div>
                        <hr>


                    <?php endwhile; ?>
                    <?php while ($row = $result_posts->fetch_assoc()) :
                        ['id' => $id, 'username' => $username, 'title' => $title, 'date' => $date,'tags' => $tags,'created_at' => $created_at] = $row; ?>
                        <div id="<?= $id ?>">
                            <p> <strong> <?= $username ?> posted...</strong>
                            </p>
                            <p><?= $title ?> 
                            </p>

                            </p>
                        </div>
                        <hr>


                    <?php endwhile; ?>
                    <!-- Aggiungi questo pulsante sotto l'area dei risultati -->
                    <button id="loadMoreBtn" class="btn btn-primary">Load More</button>

                    <?php if ($result->num_rows === 0) : ?>
                        <p>no results found</p>
                    <?php endif ?>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

    <script src="./main.js"></script>


    </script>
</body>

</html>