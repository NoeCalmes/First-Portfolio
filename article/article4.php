<div class="article4">
    <div class="article-right">

        <div class="about">
            <h1 class="dark">Contact</h1>
            <div class="line-about"></div>
        </div>

        <div class="container-section">
            <div class="left">
                <div class="first-line">
                    <img src="img/article-right/contact/phone.svg" alt="">
                    <h1 class="fr">Téléphone:</h1>
                    <h1 class="en" style="display:none;">Phone:</h1>
                </div>

                <p><a href="tel:+0658308210">+ 06 58 30 82 10</a></p>

            </div>

            <div class="right">
                <div class="first-line">
                    <img src="img/article-right/contact/email.svg" alt="">
                    <h1>Email:</h1>
                </div>

                <p>noecalmes.pro@gmail.com</p>
            </div>

        </div>


        <div class="container-end">
            <div class="element">
                <div class="text-element">
                    <p class="fr">Je suis ouvert à discuter de nouveaux projets, d'opportunités dans le monde de la
                        technologie
                        ,<strong> n'hésite pas à me contacter.</strong></p>
                    <p class="en" style="display:none;">I am open to discussing new projects and opportunities in the
                        world of technology. <strong> Please feel free to contact me.</strong></p>
                </div>

                <form action="../inc/traitement-contact.php" method="POST" class="formulaire">
                    <h1 class="fr" >Nom:</h1>
                    <h1 class="en" style="display:none;">Name:</h1>
                    <input type="text" name="name" required="">

                    <h1>Email:</h1>
                    <input type="email" name="email" required="">

                    <h1>Message:</h1>
                    <textarea type="text" name="message" id="" required=""></textarea>


                    <div class="module-f">
                        <button type="submit" class="fr" >Envoyer</button>
                        <button type="submit" class="en" style="display:none;">Submit</button>
                        <p id="message-status" class="btn-f" style="display: none; "></p>
                    </div>
                </form>
            </div>


        </div>

    </div>
</div>



<script>
    <?php
    if (isset($_GET['message'])) {
        $message = urldecode($_GET['message']);
        echo 'var messageStatus = document.getElementById("message-status");';
        echo 'messageStatus.style.display = "block";';
        echo 'messageStatus.innerHTML = "' . $message . '";';
    }
    ?>
</script>


<!-- 
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var messageStatus = document.getElementById("message-status");
        var form = document.querySelector(".formulaire");

        form.addEventListener("submit", function (event) {
            event.preventDefault(); // Empêche l'envoi du formulaire par défaut
            var formData = new FormData(form);

            fetch(form.action, {
                method: form.method,
                body: formData,
            })
                .then(function (response) {
                    if (response.ok) {
                        return response.text();
                    } else {
                        throw new Error("Erreur réseau");
                    }
                })
                .then(function (data) {
                    // Affichez le message de succès à côté du bouton "Envoyer"
                    messageStatus.textContent = "Message envoyé avec succès !";
                    messageStatus.style.color = "green";
                    messageStatus.style.display = "block";

                    // Effacez le formulaire
                    form.reset();
                })
                .catch(function (error) {
                    // Affichez le message d'erreur à côté du bouton "Envoyer"
                    messageStatus.textContent = "Erreur d'envoi du message : " + error.message;
                    messageStatus.style.color = "red";
                    messageStatus.style.display = "block";
                });
        });
    });
</script> -->


