<?php get_header(); ?>



 
<section class="hero-home">
        <div class="title-hero-picture">
            <div class="h1-title">
                <h1 class="title-h1">
                    Bienvenue chez ÉclatDev180 découvrez nos talents, suivez nos actualités !
                </h1>
                <span class="title-span">OnlineFormaPro</span>

            </div>
            <div class="picture">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/picture/hero.svg" alt="hero">
            </div>
        </div>

    </section>
    <section class="student">

        <div class="container-card-student" id="pinContainer">
            <h2 class="h2-student">Nos stagiaires</h2>
            <div class="card panel bordeaux carte">

                <div class="picture-profil-student">
                   
                    <a href="http://localhost/php/promo180/stagiaires/" ><img class="image-student" src="<?php echo get_template_directory_uri(); ?>/assets/picture/hamid-picture.jpg" alt="student image"
                        class="student_img"></a>
                    <div class="profil-student">
                        <div class="name-profesionel">
                            <span>hamid</span>
                            <span>Developpeur web </span>
                        </div>
                        <div class="student-address-date">
                           
                            <div class="address-date">

                                <div class="location-picto">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/picture/picto/location.svg" alt="icon location">
                                    <div class="location-date">
                                        <span>Bourg en Bresse</span>
                                        <span>21 decenbre 2022 </span>
                                    </div>
                                </div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/picture/picto/arrow.svg" alt="arrow picto">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-phrase-accroche">
                    <h5 class="phrase-student">Découvrez l'éclat des talents de notre promotion Développeur Web
                        et
                        Web
                    </h5>
                </div>
            </div>


        </div>
    </section>
    <!--section actuality-->
    <section class="actuality">
        <h2 class="h2-student">Nos actualités</h2>
        <div class="container-card-student">
            <a href="http://localhost/php/promo180/actualite/">
                <div class="card-actuality">
                    <div class="picture-teamworker">
                        <img src="<?php echo get_template_directory_uri(); ?>./assets/picture/gitefinder.svg" alt="gitefinder site web ">
                        <div class="teamworker">
                           
                            <div class="picture">
                                <div class="name-img">
                                <div class="name-img">
                                    <div class="img-actuality-dev">
                                        <img src="<?php echo get_template_directory_uri(); ?>./assets/picture/hamid-picture.jpg" alt="student karim">
                                    </div>
                                    <span>hamid</span>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="container-text-project">
                        <h1>Project GitesFinder</h1>
                        <div class="paragraphe-name-date-arrow">
                            <p class="pargraphe-actuality">“Création d’un site de location Gitefinder”</p>
                            <div class="name-date-arrow">

                                <div class="name-date">
                                    <span>hamid</span>
                                    <span>15 decenbre 2022 </span>
                                </div>
                                <img src="<?php echo get_template_directory_uri(); ?>./assets/picture/picto/arrow.svg" alt="arrow picto">

                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </section>
    </main>






<?php get_footer(); ?>