<?php get_header(); ?>

<section class="actuality-article">
        <div class="container-card-student-article">
       

            <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC'
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
            ?>
                    <div class="card-actuality-card">
                    <?php the_title(); ?>
                        <div class="picture-teamworker-team">
                       
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('thumbnail'); ?>
                            </a>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>

            <?php endwhile;
                wp_reset_postdata();
            else :

                echo "<p>Pas d'article</p>";
            endif;
            ?>

     
    </div>
</section>

<?php get_footer(); ?>