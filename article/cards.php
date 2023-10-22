<?php
$showAllCards = true; // Définir cette variable sur true pour afficher toutes les cartes par défaut

if (isset($_GET['category'])) {
    $category = $_GET['category'];
    if ($category !== 'all') {
        $showAllCards = false; // Si une catégorie spécifique est sélectionnée, désactivez l'affichage de toutes les cartes
    }
}
?>

<div class="container" id="all-card">
    <!-- left card -->
    <div class="left-card">
        <?php if ($showAllCards || $showWebCard): ?>
            <a href="website.php" type="button">
                <div class="card1" id="web-card">
                    <img src="img/article-right/work/card1.svg" alt="">
                    <p>Frontend</p>
                    <h1 class="fr">Site Web</h1>
                    <h1 class="en" style="display:none;">Web Site</h1>
                </div>
            </a>
        <?php endif; ?>

        <?php if ($showAllCards || $showAppCard): ?>
            <a href="#" type="button">
                <div class="card3" id="app-card">
                    <img src="img/article-right/work/card3.svg" alt="">
                    <p>Backend</p>
                    <h1 class="fr">Application Web</h1>
                    <h1 class="en" style="display:none;">App Development</h1>
                </div>
            </a>
        <?php endif; ?>

        <?php if ($showAllCards || $showCmsCard): ?>
            <a href="cms.php" type="button">
                <div class="card2" id="cms-card">
                    <img src="img/article-right/work/card2.svg" alt="">
                    <p>CMS</p>
                    <h1>Wordpress/Shopify</h1>
                </div>
            </a>
        <?php endif; ?>
    </div>

    <!-- right card -->
    <a href="#" type="button">
        <div class="right-card">
            <?php if ($showAllCards || $showWebCard): ?>
                <div class="cardone" id="web-card">
                    <img src="img/article-right/work/card4.svg" alt="">
                    <p>BLOG</p>
                    <h1 class="fr">Blog personnel</h1>
                    <h1 class="en" style="display:none;">Personal Blog</h1>
                </div>
            <?php endif; ?>

            <?php if ($showAllCards || $showAppCard): ?>
                <div class="cardtwo" id="app-card">
                    <img src="img/article-right/work/card5.svg" alt="">
                    <p class="fr">Base de données</p>
                    <p class="en" style="display:none;">Database</p>
                    <h1>SQL</h1>
                </div>
            <?php endif; ?>
        </div>
    </a>
</div>