<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <?php
            dynamic_sidebar( 'footer-column-1' );
            ?>

            <div class="footer__column-2">
                <div class="footer__column-2-title">
                    RECENT POSTS
                </div>
                <ul class="footer-recent-post-list">
                    <?php
                    $args = array(
                        'post_type' => 'jewelry_design',
                        'posts_per_page' => 2,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            $id = get_post_thumbnail_id();
                            $alt = get_post_meta($id, '_wp_attachment_image_alt', true);

                            ?>
                            <li class="footer-recent-post-item">
                                <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= $alt ?>" class="footer-recent-post-item-image">
                                <div class="footer-recent-post-item-title-and-date">
                                    <span class="footer-recent-post-item-title"><?= get_the_title(); ?></span>
                                    <span class="footer-recent-post-item-date"><?= get_the_date(); ?></span>
                                </div>
                            </li>
                            <?php
                        }
                    }
                    ?>

                </ul>
            </div>

            <?php
            dynamic_sidebar( 'footer-column-3' );
            dynamic_sidebar( 'footer-column-4' );
            ?>

        </div>
    </div>


</footer>
<?php
wp_footer();
?>
</body>
</html>

