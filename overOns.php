<?php include "header.php"; ?>
    <main>
        <div class="teamalign">
            <div class="team" id="myBtn">
                <h2 onclick="btn(1)">Rick Grent<img src="img/IMG_01.jpg" alt="" width="200" height="200"></h2>
                <h2 onclick="btn(2)">Yasien Elsayed<img src="img/IMG_0.jpeg" alt="" width="200" height="200"></h2>
                <h2 onclick="btn(3)">Ozan Erdogan<img src="img/IMG_04.jpg" alt="" width="200" height="200"></h2>
                <h2 onclick="btn(4)">Timo van Elst<img src="img/IMG_03.jpg" alt="" width="200" height="200"></h2>
            </div>
        </div>
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2 id="name">Name</h2>
                <img id="profile" src="img/IMG_01.jpg" alt="" width="200" height="200">
                <p id="text">Some text in the Modal..</p>
            </div>

        </div>
        <script>

            var modal = document.getElementById('myModal');
            var span = document.getElementsByClassName("close")[0];

            btn = function (message) {
                if (message == 1) {
                    document.getElementById("name").innerHTML = "Rick Grent";
                    document.getElementById("profile").src = 'img/IMG_01.jpg';
                    document.getElementById("text").innerHTML =
                        "Functie: <br> <b>Administrator, Planner en Backend programmeur</b> <br><br>" +
                        "Over mij: <br> Energiek, Gefocust en een tikkeltje te serieus zo nu en dan, but I get stuff done. <br><br>" +
                        "Wat wil ik bereiken: <br> Ik wil graag professioneel backend programmeur worden, omdat ik vaak beste gevoel heb wanneer ik backend programmeer. <br><br>";
                    modal.style.display = "block";
                } else if (message == 2) {
                    document.getElementById("name").innerHTML = "Yasien Elsayed";
                    document.getElementById("profile").src = 'img/IMG_0.jpeg';
                    document.getElementById("text").innerHTML =
                        "Functie: <br> <b>Frontend programmeur</b> <br><br>" +
                        "Over mij: <br> Serieus, effectief en een beetje een perfectionist. Als ik bezig ben met iets ga ik ook uiterst mijn best doen om het op een topniveau te leveren <br><br>" +
                        "Wat wil ik bereiken: <br> Ik wil me specialiseren in het maken van professionele moderne websites of e-commerce. Ooit wil ik een eigen bedrijf kunnen opstarten als ik ook genoeg werkervaring heb en de kennis om het succesvol te maken. <br><br>";
                    modal.style.display = "block";
                }
                else if (message == 3) {
                    document.getElementById("name").innerHTML = "Ozan Erdogan";
                    document.getElementById("profile").src = 'img/IMG_04.jpg';
                    document.getElementById("text").innerHTML =
                        "Functie: <br> <b>Programmeur</b> <br><br>" +
                        "Over mij: <br> Ik heb redelijke ervaring in front-end en back-end en zal helpen bij beide. <br><br>" +
                        "Wat wil ik bereiken: <br> Ik wil met goede samenwerking van mijn team een goede en kwalitatieve website opzetten die we foutloos kunnen presenteren op de dag dat het moet. <br><br>";
                    modal.style.display = "block";
                }
                else if (message == 4) {
                    document.getElementById("name").innerHTML = "Timo van Elst";
                    document.getElementById("profile").src = 'img/IMG_03.jpg';
                    document.getElementById("text").innerHTML =
                        "Functie: <br> <b>Administrator, Programmeur</b> <br><br>" +
                        "Over mij: <br> Ik werk als administratief medewerker voor GFW; ik behoed contact met de klanten, en overigens opdrachten te werven <br><br>" +
                        "Wat wil ik bereiken: <br> Om ervaring op te doen in het bedrijfsleven <br><br>";
                    modal.style.display = "block";
                }

            }

            span.onclick = function () {
                modal.style.display = "none";
            }

            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
    </main>
<?php include "footer.php"; ?>