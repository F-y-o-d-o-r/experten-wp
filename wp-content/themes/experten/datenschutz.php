<?php
/*
 * Template Name: Datenschutz
 */
$text__block_1 = get_field('text__block_1');
$titel_block_1  = get_field('titel_block_1');

get_header();

?>

<section class="impressum datenschutz">
    <div class="container">
        <?php
        if ($titel_block_1) {?>
            <div class="section-head mt-5">
                <?php
                if($titel_block_1) {?>
                    <h2 class="section-head__title"><?php  echo $titel_block_1 ?></h2>
                    <?php
                }
                ?>
            </div>
            <?php
        }
        if ($text__block_1) {?>
            <div class="intro-head__text"><?php echo $text__block_1?></div>
            <?php
        }
        ?>
    </div>
</section>

<?php

get_footer();