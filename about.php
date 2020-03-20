<?php
    include '_doctype.php';
    include '_navbar.php';
    $Team = [
        'Amina' => ["./images/photo-equip/Amina.jpg", 'Amina','Some quick example text to build on the card title and make up the bulk of the
                        card\'s content.'],
        'Christophe' => ['./images/photo-equip/Christophe.jpg','Christophe', 'Some quick example text to build on the card title and make up the bulk of the
                        card\'s content.'],
        'Guillaume' => ['./images/photo-equip/Guillaume.jpg','Guillaume', 'Some quick example text to build on the card title and make up the bulk of the
                        card\'s content.'],
        'Lucas' => ['./images/photo-equip/Lucas.jpg','Lucas', 'Some quick example text to build on the card title and make up the bulk of the
                        card\'s content.'],
        'Mickael' => ['./images/photo-equip/Mickael.jpg','Mickael', 'Some quick example text to build on the card title and make up the bulk of the
                        card\'s content.'],
        'Raphael' => ["./images/photo-equip/Raphael.jpg","Raphael", "Some quick example text to build on the card title and make up the bulk of the
                        card\'s content."]
    ];
?>



    <!--      Banner + button -        -->
    <div class="banner">
        <span class="banner-title">Notre équipage</span>
        <span class="banner-baseline">La tête dans les étoiles</span>
        <div class="overlay"></div>
        <img src="./images/banner.jpg" alt="mars expedition">
        <div class="container-btn container-btn-banner">
            <button class="btn" id="btn-banner" type="submit" data-toggle="modal" data-target="#exampleModal">Réserver</button>
        </div>
    </div>

    <!--      Contenu       -->
    <main class="container">

        <h2>Découvrez l'immensité de l'espace avec :</h2>
        <div class="about-cards">
              <!-- <div class="equipe"></div> -->


            <?php
            foreach ($Team as $key => $value) {
                echo '<div class="card equipe">
                        <img src="'.$value[0].'" class="card-img-top" alt="photo-team">
                        <div class="card-body">
                        <h5 class="card-title">'.$value[1].'</h5>
                        <p class="card-text">'.$value[2].'</p>
                        </div>
                    </div>';
            }
            ?>

        </div>
    </main>



<?php
include '_modal.php';
include '_footer.php';
?>