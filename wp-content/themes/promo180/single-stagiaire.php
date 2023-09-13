<?php get_header(); ?>



<section class="actuality">
    <h2 class="h2-student"><?php the_title() ?></h2>
    <div class="container-card-student">
        <?php
        if (have_posts()) {
            while (have_posts()) : the_post();

        ?>

                <a href="<?php the_permalink(); ?>">
                    <div class="card-actuality">
                        <div class="picture-teamworker">
                            <?php the_post_thumbnail('thumbnail'); ?>
                            <div class="teamworker">
                                <div class="title-name">
                                    <span class="Stagiare">Stagiare</span>

                                </div>

                            </div>
                </a>

                <div class="links">


                    <a href=" <?php echo  get_post_meta(get_the_ID(), 'Portfolio', true); ?>">Portfolio</a>

                    <a href=" <?php echo  get_post_meta(get_the_ID(), 'linkedin', true); ?>">LinkedIn</a>

                    <a href=" <?php echo  get_post_meta(get_the_ID(), 'github', true); ?>">Github</a>
                </div>
        <?php
            endwhile;
        } else {
            echo "<p>Pas de  Stagiare</p>";
        }
        ?>


    </div>

</section>











<?php get_footer(); ?>