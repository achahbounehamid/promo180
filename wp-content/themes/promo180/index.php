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



<?php get_footer(); ?>