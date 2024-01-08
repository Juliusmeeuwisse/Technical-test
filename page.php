<?php get_header(); ?>

        <main>

            <?php
            if (have_rows('blocks')) :

                while (have_rows('blocks')) : the_row();

                    include 'blocks/' . get_row_layout() . '.php';

                endwhile;

            else :
            // Do something...
            endif;
            ?>
        </main>
<?php get_footer(); ?>