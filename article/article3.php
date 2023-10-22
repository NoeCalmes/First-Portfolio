<?php
$showWebCard = false;
$showAppCard = false;
$showCmsCard = false;
$showAllCard = false;
if (isset($_GET['category'])) {
    $category = $_GET['category'];
    switch ($category) {
        case 'all':
            $showAllCard = true;
            break;
        case 'app':
            $showAppCard = true;
            break;
        case 'web':
            $showWebCard = true;
            break;
        case 'cms':
            $showCmsCard = true;
            break;
        default:
            // Par défaut, afficher toutes les cartes
            $showAllCard = true;
            break;
    }
}
?>


<div class="article3">
    <div class="article-right">

        <div class="about">
            <h1 class="dark">Portfolio</h1>
            <div class="line-about"></div>
        </div>

        <div class="small-navbar">
            <ul>
                <a href="?category=all" type="button">
                    <li class="first rizoto fr ">Tout</li>
                    <li class="first en" style="display:none;">All</li>
                </a>

                <a href="?category=app" type="button">
                    <li class="dark rizoto fr">Developpement Application</li>
                    <li class="dark en" style="display:none;">App Development</li>
                </a>

                <a href="?category=web" type="button">
                    <li class="dark rizoto lop ris fr">Developpement Web</li>
                    <li class="dark lop en" style="display:none;">Web Development</li>
                </a>

                <a href="?category=cms" type="button">
                    <li class="dark rizoto fr">CMS</li>
                    <li class="dark en" style="display:none;">CMS</li>
                </a>
            </ul>
        </div>

        <?php include 'cards.php'; ?>


    </div>
</div>