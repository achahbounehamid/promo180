<?php get_header();
?>

<!--page stagiaire-->
<section class="actuality-category">
   
    <div class="categories-container">

        
       
                <div class="filter-bar" id="filter-bar">
                    <div class="categories">
                        <h3>Catégories :</h3>
                        <div class="scroll-cat">
                            <?php $categories = get_categories(); ?>
                            <?php if ($categories) : ?>

                                
                                <ul>
                                    <?php foreach ($categories as $category) : ?>
                                        <li>
                                            <a href="<?php echo get_category_link($category->term_id); ?>">
                                                <?= esc_html($category->name) ?>
                                            </a>
                                        </li>

                                    <?php endforeach; ?>
                                </ul>
                            <?php else : ?>
                                <p>Aucune catégorie trouvée.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="btn-left">
                    <button class="arrow right">
                       
                    </button>
                </div>
            </div>
        </div>

        <div class="container-card-student">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1,
            );
            $post_query = new WP_Query($args);

            if ($post_query->have_posts()) {
                while ($post_query->have_posts()) : $post_query->the_post();
                    $thumbnail_id = get_post_thumbnail_id();
                    $thumbnail_array = wp_get_attachment_image_src($thumbnail_id, 'full');
                    $thumbnail_url = $thumbnail_array ? $thumbnail_array[0] : '';

            ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="card-actuality">
                            <div class="picture-teamworker">
                            <h1>Project <?php the_title() ?></h1>
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                                <div class="teamworker">
                                    <div class="picture">
                                        <?php
                                        $featured_image_id = get_post_thumbnail_id();
                                        $images = get_attached_media('image');

                                        foreach ($images as $image) {
                                            if ($image->ID !== $featured_image_id) {
                                                $image_url = wp_get_attachment_image_src($image->ID, 'thumbnail');
                                                $image_alt = get_post_meta($image->ID, '_wp_attachment_image_alt', true);
                                        ?>
                                               
                                                    <!-- <span>Karim</span> -->
                                                </div>

                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>


                                </div>
                            </div>
                            <div class="container-text-project">
                                
                                <div class="paragraphe-name-date-arrow">
                                    <p class="pargraphe-actuality">“<?php the_excerpt(); ?>”</p>
                                    
                                </div>
                            </div>
                        </div>
                    </a>
            <?php
                endwhile;
            } else {
                echo "<p>pas d'article</p>";
            }
            ?>

        </div>

</section>


<?php get_footer();
?>