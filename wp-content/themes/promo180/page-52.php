<?php get_header(); ?>

<section class="actuality">
    <?php
    $args = array(
        'post_type' => 'stagiaire',

    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) :
            $query->the_post();
    ?>
            <div class="student">
                <h2 class="h2-student"><?php the_title() ?></h2>
                <div class="container-card-student">
                    <div class="links">
                        <a href=" <?php echo  get_post_meta(get_the_ID(), 'Portfolio', true); ?>">Portfolio</a>
                        <a href=" <?php echo  get_post_meta(get_the_ID(), 'linkedin', true); ?>">LinkedIn</a>
                        <a href=" <?php echo  get_post_meta(get_the_ID(), 'github', true); ?>">Github</a>
                    </div>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('thumbnail'); ?>
                        <?php the_title(); ?>
                </div>
            </div>
    <?php


        endwhile;
        wp_reset_postdata();
    else :
        echo 'Aucun stagiaire trouvé.';
    endif;
    ?>
</section>

<?php get_footer(); ?>