<!-- navbar debut -->
<nav>
    <div class="container">
        <ul class="dispo">
            <li class="card">
                <a <?php if ($activePage === 'index')
                    echo 'class="active"'; ?> href="index.php">
                    <img class="home"
                        src="img/nav/<?php echo ($activePage === 'index') ? 'home_active.svg' : 'home.svg'; ?>" alt="">
                    <p class="fr" >Acceuil</p>
                    <p class="en" style="display:none;">Home</p>
                </a>
            </li>
            <li class="card">
                <a <?php if ($activePage === 'resume')
                    echo 'class="active"'; ?> href="resume.php">
                    <img class="resume"
                        src="img/nav/<?php echo ($activePage === 'resume') ? 'resume_active.svg' : 'resume.svg'; ?>"
                        alt="">
                    <p class="fr">Parcours</p>
                    <p class="en" style="display:none;">Resume</p>
                </a>
            </li>


            <li class="card">
                <a <?php if ($activePage === 'work')
                    echo 'class="active"'; ?> href="work.php">
                    <img class="work"
                        src="img/nav/<?php echo ($activePage === 'work') ? 'work_active.svg' : 'work.svg'; ?>" alt="">
                    <p class="fr" >Portfolio</p>
                    <p class="en"style="display:none;" >Work</p>
                </a>
            </li>
            <li class="card">
                <a <?php if ($activePage === 'contact')
                    echo 'class="active"'; ?> href="contact.php">
                    <img class="contact"
                        src="img/nav/<?php echo ($activePage === 'contact') ? 'contact_active.svg' : 'contact.svg'; ?>"
                        alt="">
                    <p>Contact</p>
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- navbar fin -->

