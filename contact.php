<?php include "header.php"; ?>
    <main>
        <form action="verstuurContact.php" method="post" class="verstuurtjes">
            <label>Naam: <br><input type="text" name="naam" placeholder="Naam"></label><br>
            <label>Email:<br> <input type="email" name="email" placeholder="Emailadres"></label><br>
            <label>Onderwerp:<br> <input type="text" name="onderwerp" placeholder="Onderwerp"></label><br>
            <label>Bericht:<br> <textarea cols="40" rows="10" name="bericht"></textarea></label><br>

            <input type="submit">
        </form>
    </main>
<?php include "footer.php"; ?>
