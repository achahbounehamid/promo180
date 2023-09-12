<?php get_header(); ?>

<!-- <section class="all_article">



<?php
if(have_posts())
{
    while(have_posts()) : the_post();
    
    ?>
    <article class="actuality">

        <h2><?php the_title() ?></h2>
        <?php the_post_thumbnail('thumbnail'); ?>
        <p><?php  the_excerpt() ?></p>
        <p><a href="<?php the_permalink(); ?>">En savoir plus </p>
        <p>Publié : <?php the_date(); ?> par <?php the_author(); ?></p>
    </article>

    <?php 
        endwhile;
        

} else{
    echo "<p>Pas d'article</p>";
}
    ?>

</section> -->


<section class="actuality">

        <h2 class="h2-student"><?php the_title() ?></h2>
        <div class="container-card-student">
        <?php
if(have_posts())
{
    while(have_posts()) : the_post();
    
    ?>

            <a href="<?php the_permalink(); ?>">
                <div class="card-actuality">
                    <div class="picture-teamworker">
                    <img src="./assets/picture/hero.svg" alt="hero">

                        <div class="teamworker">
                            <div class="title-name">
                                <span class="span-teamworker">Team worker</span>
                               
                            </div>
                            <div class="picture">
                                <div class="name-img">
                                    <div class="img-actuality-dev">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                    <img src="./assets/picture/hero.svg" alt="hero">

                                    </div>
                                    <span>hamid</span>
                                </div>
                                <div class="name-img">
                                    <div class="img-actuality-dev">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                    </div>
                                    <span>hamid</span>
                                </div>
                                <div class="name-img">
                                    <div class="img-actuality-dev">
                                    <?php the_post_thumbnail('thumbnail'); ?>
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
                                <span><?php the_author(); ?></span>
                                        <span><?php the_date('j F Y'); ?></span>
                                </div>
                                <?php the_post_thumbnail('thumbnail'); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <?php 
        endwhile;
        

} else{
    echo "<p>Pas d'article</p>";
}
    ?>

            
        </div>

    </section>
<?php get_footer(); ?>