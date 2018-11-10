<?php include "header.php"; ?>
<main>
    <script src="ajax.js">
        vraagGevraagd = document.getElementById('vraagGevraagd');
        vraagGevraagd.addEventListener('keyup', function () {
            showList(vraagGevraagd, 'list');
        });
    </script>
    <h1 id="vraaghead">VRAAGJE</h1>
    <form action="getdata.php?q">
        <input id="vraag" class="input" type="text" name="search" id="vraagGevraagd" onkeyup="showList(this.value, 'list')"
               placeholder="Vraag je vraag!">
    </form>
    <br>
    <div class="inputAnswer" id="txtHint"></div>
</main>
<?php include "footer.php"; ?>
