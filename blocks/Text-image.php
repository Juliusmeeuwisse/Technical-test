<?php
$image = get_sub_field('image');
$title = get_sub_field('title');
$paragraph = get_sub_field('paragraph');
$button = get_sub_field('button');
$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link')

?>
<section class="text-image-block">
    <!-- Bootstrap grid wrapper -->
    <div class="bootstrap-wrapper">
        <div class="container-fluid">
            <div class="row text-image">
                <?php

                if (get_field('left_right') == 'left') {
                    // Do something.
                }
                ?>
                <!-- 2 col, 1 for images that is bigger than right one -->
                <div class="col-lg-7 nopadding">
                    <img src="<?php echo $image ?>"></img>
                </div>
                <div class="col right_side nopadding">
                    <div class="right_side_inner">
                        <div>
                            <!-- If there is a title inserted by client show it if not hide block -->
                            <?php if ($title) { ?>
                                <h2><?php echo $title ?></h2>
                            <?php } ?>
                            <!-- If there is a paragraph inserted by client show it if not hide block -->
                            <?php if ($paragraph) { ?>
                                <p><?php echo $paragraph ?></p>
                            <?php } ?>
                            <!-- If button block is true show button and link & text field -->
                            <?php
                            if ($button) { ?>
                                <button href="<?php echo $button_link ?>" class="default button"><?php echo $button_text ?> </button>
                            <?php } ?>
                            <div>
                                <!-- Black line at the bottom of the block -->
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>