<section class="header-slider-block">
    <!-- Flickity carousel container -->
    <div class="carousel" data-flickity='{ "wrapAround": true }'>
        <!-- Check for rows in slider field ACF -->
        <?php if (have_rows('slider')) : ?>


            <?php while (have_rows('slider')) : the_row(); ?>

                <?php
                // Load sub field value.
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $paragraph = get_sub_field('paragraph');
                $size = 'full'; // (thumbnail, medium, large, full or custom size) 
                ?>
                <!-- If there is an image show the slide otherwise hide it -->
                <?php if ($image) { ?>
                    <div class="carousel-cell">
                        <div class="slider_image">
                            <?php
                            if ($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                            ?>
                            <!-- Title & Par inside the slide-->
                            <div class="inside_slide">
                                <?php if ($title) { ?>
                                    <h1><?php echo $title ?></h1>
                                <?php } ?>
                                <?php if ($paragraph) { ?>
                                    <p><?php echo $paragraph ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>


            <?php endwhile; ?>
    </div>
</section>
<?php else : ?>

<?php endif; ?>