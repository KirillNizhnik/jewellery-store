<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <?php
            dynamic_sidebar( 'footer-column-1' );
            ?>
<!--            <div class="footer__column-1">-->
<!---->
<!--                <img src="--><?php //= bloginfo( 'template_url' ); ?><!--/assets/images/logo.svg" alt="logo" class="footer__logo">-->
<!--                <p class="footer__column-1-text">-->
<!--                    Condimentum adipiscing vel neque dis nam parturient orci at scelerisque neque dis nam parturient.-->
<!--                </p>-->
<!--                <div class="footer__column-1-contact">-->
<!--                    <div class="footer-address-block footer-contact-block">-->
<!--                        <img src="--><?php //= bloginfo( 'template_url' ); ?><!--/assets/images/gps.svg" alt="" class="footer-address-img">-->
<!--                        <span class="footer-address footer-contact">451 Wall Street, UK, London</span>-->
<!--                    </div>-->
<!--                    <a href="" class="footer-phone-link footer-contact-block">-->
<!--                        <img src="--><?php //= bloginfo( 'template_url' ); ?><!--/assets/images/phone.svg" alt="" class="footer-phone-img">-->
<!--                        <span class="footer-phone footer-contact">Phone: (064) 332-1233</span>-->
<!--                    </a>-->
<!--                    <div class="footer-fax-block footer-contact-block">-->
<!--                        <img src="--><?php //= bloginfo( 'template_url' ); ?><!--/assets/images/envelop.svg" alt="" class="footer-fax-img">-->
<!--                        <span class="footer-fax footer-contact">Fax: (099) 453-1357</span>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
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

