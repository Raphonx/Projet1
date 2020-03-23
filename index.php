<?php
    include '_header.php';
$arrayPlanets = [
    'mars' => ["mars.php", "./images/planetes/mars/mars.jpg", "Visiter Mars", "3M€/pers *"],
    'coruscant' => ['coruscant.php','./images/planetes/coruscant/Coruscant.jpg','Visiter Coruscant','20M€/pers *'],
    'arakis' => ['arrakis.php','./images/planetes/arrakis/arrakis_planete.jpg','Visiter Arrakis','25M€/pers *']
];
?>
    <div class="banner-large">
        <h1 class="banner-title">Déjeunez sur <span id="changeText">Mars</span></h1>
        <span class="banner-baseline">L'immensité de l'espace à votre portée !</span>
        <div class="overlay"></div>
        <img src="images/home2.jpg" alt="mars expedition">
        <div class="container-btn container-btn-banner">
        <button class="btn" id="btn-banner" type="submit" data-toggle="modal" data-target="#exampleModal">Réserver</button>
        </div>
    </div>


    <main class="container">

        <h2 class="title-home">Bienvenue chez Voyager !</h2>
        <p class="text-home">Voyager vous permet de réaliser votre rêve d'explorer l'espace et les spots les plus mythiques de la galaxie ou d'ailleurs !</p>

        <div class="container">
            <h3>Nos Meilleurs voyages</h3>
            <div class="home-cards">
                <?php
                foreach ($arrayPlanets as $key => $value) {
                echo '<a href="'.$value[0].'" class="">
                    <div class="card bg-dark text-white hover-card">
                        <img src="'.$value[1].'" class="card-img" alt="Arrakis">
                        <div class="card-img-overlay">
                            <h5 class="card-title-home"> "'.$value[2].'"</h5>
                            <p class="card-text-home">"'.$value[3].'"</p>
                        </div>
                    </div>
                </a>';
                }
                ?>
            </div>
        </div>

        <h3>Ils nous font confiance</h3>
        <div class="brands">
            <img src="./images/spacex.png" alt="spacex">
            <img src="./images/nasa.png" alt="nasa">
            <img src="./images/amazon.png" alt="amazon">
        </div>
    </main>

    <script src="app.js"></script>

    <?php
    include '_footer.php';
    ?>

