<?php
// 0. uitlezen van array
$naam = $_POST['naam'];
$email = $_POST['email'];
$bericht = $_POST['bericht'];
$onderwerp = $_POST['onderwerp'];

$to = '24547@ma-web.nl';

// Mail versturen
$mailen = mail($to, $onderwerp, $bericht, $email);

include "header.php";
    if ($mailen) { ?>
    <main>
        <h2>Mail verstuurd!</h2>
        <p>Naam: <?php echo $naam; ?> email: <?php echo $email; ?></p>
        <p>Onderwerp: <?php echo $onderwerp; ?></p>
        <p>Bericht: <?php echo $bericht; ?></p>
    </main>
    <?php } else { ?>
    <main>
        <h2>Mail niet gestuurd!</h2>
    </main>
    <?php }

include "footer.php";