<?php
// è il php dedicato al frontend (alla view)
// per la prima milestone
require_once __DIR__ . '/database/database.php';
// qui a questo punto possiamo creare (per la prima milestone) tutto il nostro html e ciclare i nostri dischi (sempre in php)
// e stampare copertina, titolo e così via, come da screenshot.
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/app.css">
    <title>Spotify</title>
  </head>
  <body>
    <div id="root">

      <div class="container">

        <header>
          <div class="header-container">
            <div class="logo">
              <img src="https://upload.wikimedia.org/wikipedia/commons/7/71/Spotify.png" alt="">
            </div>
          </div>
        </header>

        <main>
          <div class="main-container">
            <?php
            foreach ($albums as $album => $details) {
            ?>
            <div class="album">
              <div class="poster">
                <?php echo '<a href="#"><img style="width: 100%" src="'. $details["poster"] .'" alt=""></a>' ?> <!-- immagini!! -->
              </div>
              <div class="title">
                <a href="#"><?php echo $details["title"]; ?></a>
              </div>
              <div class="author">
                <a href="#"><?php echo $details["author"]; ?></a>
              </div>
              <div class="year">
                <a href="#"><?php echo $details["year"]; ?></a>
              </div>

            </div>
            <?php
            }
            ?>
          </div>
        </main>

      </div>

    </div>
  </body>
</html>
