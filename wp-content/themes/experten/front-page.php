<?php
/*
 * Template Name: Front page
 */

$foto_block_1 = get_field('foto_block_1');
$text_foto_block1 = get_field('text_foto_block1');
$titel_block_1  = get_field('titel_block_1');
$subtitle_block_1 = get_field('subtitle_block_1');
$text__block_1 = get_field('text__block_1');

$titel_block_2 = get_field('titel_block_2');
$subtitle_block_Partner2 = get_field('subtitle_block_2');
$text__block_2 = get_field('text__block_2');
$list_of_elements = get_field('list_of_elements');

$foto_galerie = get_field('foto_galerie');
$text_1_block_3 = get_field('text_1_block_3');
$text_2_block_3 = get_field('text_2_block_3');

$titel_block_4 = get_field('titel_block_4');
$subtitle_block_4 = get_field('subtitle_block_4');
$fallteil = get_field('fallteil');
$age = get_field('age');
$age_block_4 = get_field('age_block_4');
$text_block_4_age = get_field('text_block_4_age');

$titel_block_5 = get_field('titel_block_5');
$subtitle_block_5 = get_field('subtitle_block_5');
$angebotsliste = get_field('angebotsliste');

$titel_block_6 = get_field("titel_block_6");
$subtitle_block_6 = get_field("subtitle_block_6");
$text__block_6 = get_field("text__block_6");

$titel_block_7 = get_field('titel_block_7');
$storyliste = get_field('storyliste');

$titel_block_9 = get_field('titel_block_9');
$icone_text_block = get_field('icone_text_block');
$text__block_9 = get_field('text__block_9');

$partnerlogos = get_field('partnerlogo');
$titel_company_futter = get_field('titel_company_futter');
$text_company_futter = get_field('text_company_futter');
$kontaktliste = get_field('kontaktliste', "option");
$sozial = get_field("sozial");
$map =get_field('map');

$heade_popup_formular_titel = get_field('heade_popup_formular_titel');
$titel_des_seitenformulars = get_field('titel_des_seitenformulars');
$formulartitel_berechnen = get_field('formulartitel_berechnen');


$footer_nav = get_field('footer_nav','option' );

$sent_type_1 = get_field('sent_type_1','option' );
$sent_type_2 = get_field('sent_type_2','option' );

get_header();

?>
<section class="intro  bg-grey text-intro-bg">
        <div class="container intro-head">
            <?php
            if($foto_block_1) {?>
                <div class="intro-head__img">
                    <div class="wrapper">
                        <img alt="main-img" src="<?php echo $foto_block_1 ?>">
                    </div>
                    <?php
                    if($text_foto_block1) : ?>
                    <p class="intro-head__img-dscr"><?php echo $text_foto_block1?></p>
                    <?php
                    endif;
                    ?>
                </div>
                <?php
            }
            ?>
            <div class="intro-head__dscr">
                <?php
                if ($titel_block_1 or $subtitle_block_1) {?>
                    <div class="section-head">
                        <?php
                        if($titel_block_1) {?>
                            <h2 class="section-head__title"><?php  echo $titel_block_1 ?></h2>
                            <?php
                        }
                        if ($subtitle_block_1) {?>
                            <p class="section-head__sub-title"><?php  echo $subtitle_block_1 ?></p>
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
                <button href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><?php echo __('Kostenlose Beratung anfordern! ')?></button>
            </div>

        </div>
        <div class=" container intro-body">
            <div class="intro-body__content">
                <?php
                if($titel_block_2 ) {?>
                    <div class="section-head">
                        <?php
                        if ($titel_block_2) {?>
                            <h2 class="section-head__title"><?php echo $titel_block_2?></h2>
                            <?php
                        }
                        if($subtitle_block_2) {?>
                            <p class="section-head__sub-title"><?php  echo $subtitle_block_2 ?></p>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                }
                if ($text__block_2) {?>
                    <p class="intro-body__text"><?php  echo $text__block_2?></p>
                    <?php
                }
                ?>
            </div>
            <?php
            if ($list_of_elements) {?>
                <ul class="intro-body__content">
                    <?php
                    foreach ($list_of_elements as $list_of_element_item ){?>
                        <li class="intro-body__list-item">
                            <h3 class="list-title"><?php  echo $list_of_element_item['title_element']?></h3>
                            <p class="list-description"><?php  echo $list_of_element_item['text_element']?></p>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <?php
            }
            ?>
        </div>

</section>
<section class="gallery">
    <?php
     if($foto_galerie) {
         $gallery_list_top = $foto_galerie['gallery-list__top'];
         $gallery_list_bottom = $foto_galerie['gallery-list__bottom'];
         ?>
         <div class="gallery-wrap">
             <?php
              if($gallery_list_top) {?>
                  <ul class="gallery-list__top">
                      <?php
                      foreach ($gallery_list_top as $top_item) {?>
                          <li class="gallery-list__item">
                              <img class="gallery-list__img" src="<?php  echo $top_item['top_foto']?>">
                          </li>
                          <?php
                      }
                      ?>
                  </ul>
                  <?php
              }

              if($gallery_list_bottom) {?>
                  <ul class="gallery-list__bottom">
                      <?php
                       foreach ($gallery_list_bottom as $bottom_item) {?>
                           <li class="gallery-list__b-item">
                               <img class="gallery-list__b-img" src=" <?php echo $bottom_item['bottom_foto']?>">
                               <p class="gallery-list_b_text"><?php echo $bottom_item['text_block_3']?></p>
                           </li>
                           <?php
                       }
                      ?>
                  </ul>
                  <?php
              }
             ?>
         </div>
         <?php
     }
     ?>
</section>
<section class="case">

        <div class="container">
        <?php
        if($titel_block_4 ) {?>
            <div class="section-head">
                <?php
                if ($titel_block_4) {?>
                    <h2 class="section-head__title"><?php echo $titel_block_4?></h2>
                    <?php
                }
                if($subtitle_block_4) {?>
                    <p class="section-head__sub-title"><?php  echo $subtitle_block_4 ?></p>
                    <?php
                }
                ?>
            </div>
            <?php
        }
        if($fallteil) {
            ?>
            <ul class="case-list">
                <?php
                foreach ($fallteil as $fallTtem ) {?>
                    <li class="case-list__item">
                        <?php
                        if ($fallTtem['titel_fallliste']) {?>
                            <h3 class="case-list__title"><?php echo $fallTtem['titel_fallliste']?></h3>
                            <?php
                        }
                        if ($fallTtem['text_fallliste']) {?>
                            <p class="case-list__text"><?php echo $fallTtem['text_fallliste']?></p>
                            <?php
                        }
                        ?>
                    </li>
                    <?php
                }
                if ($age['age_block_4'] and $age['text_block_4_age'] ) {?>
                    <li class="case-list__item">
                        <?php
                        if($age['age_block_4']) {?>
                            <h3 class="case-list__title"><?php echo $age['age_block_4']?></h3>
                            <?php
                        }
                        if ($age['text_block_4_age']) {?>
                            <p class="case-list__text"><?php echo $age['text_block_4_age']?></p>
                            <?php
                        }
                        ?>
                    </li>
                    <?php
                }

                ?>
            </ul>
            <?php
        }
        ?>
    </div>
</section>
<section class="offers bg-grey text-of-bg">
    <div class="container ">
        <?php
        if($titel_block_5 ) {?>
            <div class="section-head">
                <?php
                if ($titel_block_5) {?>
                    <h2 class="section-head__title"><?php echo $titel_block_5?></h2>
                    <?php
                }
                if($subtitle_block_5) {?>
                    <p class="section-head__sub-title"><?php  echo $subtitle_block_5 ?></p>
                    <?php
                }
                ?>
            </div>
            <?php
        }
        if ($angebotsliste) {?>
            <ul class="offers__list">
                <?php
                foreach ($angebotsliste as $angebotsliste_item ){?>
                    <li class="list-item">
                        <h3 class="list-title"><?php  echo $angebotsliste_item['titel_angebotsliste']?></h3>
                        <p class="list-description"><?php  echo $angebotsliste_item['textangebote_liste']?></p>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <?php
        }
        ?>
        <a href="#" class="btn-primary" data-toggle="modal" data-target="#exampleModal"><?php echo __('Kostenlose Beratung anfordern! ')?></a>
    </div>

</section>
<section class="costs text-cost-bg">
    <div class="container  d-flex justify-content-start flex-wrap ">
        <div class="costs__box">
            <?php
            if($titel_block_6 ) :?>
                <div class="section-head">
                    <?php
                    if ($titel_block_6) {?>
                        <h2 class="section-head__title"><?php echo $titel_block_6?></h2>
                        <?php
                    }
                    if($subtitle_block_6) {?>
                        <p class="section-head__sub-title"><?php  echo $subtitle_block_6 ?></p>
                        <?php
                    }
                    ?>
                </div>
                <?php
            endif;

            if ($text__block_6): ?>
            <div class="costs__dscr"> <?php echo $text__block_6?></div>
            <?php
                endif;
            ?>

        </div>
        <div class="costs__box">
            <?php echo do_shortcode( '[contact-form-7 id="100" title="Berechnen one"]' ); ?>
            <button href="#" type="button" id="cost-btn" class="btn btn-primary" data-toggle="modal" data-target="#costModal"><?php echo __('Angebot anfordern! ')?></button>
        </div>
    </div>
</section>
<section class="review bg-grey">
    <div class="container ">
        <?php
        if($titel_block_7 ) {?>
            <div class="section-head">
                <?php
                if ($titel_block_7) {?>
                    <h2 class="section-head__title"><?php echo $titel_block_7?></h2>
                    <?php
                }
                ?>
            </div>
            <?php
        }
        if ($storyliste) {?>
            <div class="review-list__wrap swiper-container">
                <div class="review-list swiper-wrapper">
                    <?php
                    foreach ($storyliste as $storyItem) {?>
                        <div class="review-list__item swiper-slide">
                            <?php
                            if ($storyItem['kundenimage']) {?>
                                <div class="review-list__img">
                                    <img src="<?php echo $storyItem['kundenimage']?>">
                                </div>
                                <?php
                            }
                            if ($storyItem['kundenname']) {?>
                                <p class="review-list__name"><?php echo$storyItem['kundenname'] ?></p>
                                <?php
                            }
                            if ($storyItem['kundenalter']) {?>
                                <p class="review-list__age"><?php echo$storyItem['kundenalter'] ?></p>
                                <?php
                            }
                            if ($storyItem['kundenbewertung']){?>
                                <p class="review-list__dscr"><?php echo$storyItem['kundenbewertung'] ?></p>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <!-- Add Arrows -->
                <div class="swiper-button-next"><?php _e('weiter')?></div>
                <div class="swiper-button-prev"><?php _e('zurück')?></div>

                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>

            <?php
        }
        ?>

    </div>

</section>
<section id="form" class="contact-us">
    <div class="container">
        <?php
        if($titel_des_seitenformulars ) {?>
            <div class="section-head">
                <h2 class="section-head__title"><?php echo $titel_des_seitenformulars?></h2>
            </div>
            <?php
        }
        echo do_shortcode('[contact-form-7 id="92" title="Contact us"]');
        ?>
    </div>
</section>
<section class="mail-us">
    <div class="container d-flex justify-content-center flex-wrap">
        <div class="mail-us-box">
            <?php
            if($titel_block_9 ) {?>
                <div class="section-head">
                    <?php
                    if ($titel_block_9) {?>
                        <h2 class="section-head__title"><?php echo $titel_block_9?></h2>
                        <?php
                    }
                    ?>
                </div>
                <?php
            }
            if ($text__block_9) {?>
                <div class="mail-us__dscr">
                    <?php
                     if ($icone_text_block) {?>
                         <img class="mail-us__icon" src="<?php  echo $icone_text_block?>">
                         <?php
                     }
                     if ($text__block_9) {?>
                         <p class="mail-us__text"><?php echo $text__block_9?></p>
                         <?php
                     }
                    ?>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="mail-us-box">
            <?php echo do_shortcode( '[contact-form-7 id="6" title="mail me"]' ); ?>
        </div>
    </div>

</section>
<!--was footer here-->


    <!-- Modal -->
    <div class="modal contact-us-modal-form fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
                <div class="modal-header">
                    <?php
                     if ($heade_popup_formular_titel) { ?>
                         <h2 class="modal-title" id="exampleModalLabel"><?php echo $heade_popup_formular_titel?></h2>
                         <?php
                     }
                    ?>
                </div>
                <div class="modal-body">
                    <?php echo do_shortcode( '[contact-form-7 id="93" title="Head form"]' ); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal calc-form-modal fade" id="costModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
                <div class="modal-header">
                    <?php
                    if ($formulartitel_berechnen) { ?>
                        <h2 class="modal-title" id="exampleModalLabel"><?php echo $formulartitel_berechnen?></h2>
                        <?php
                    }
                    ?>
                </div>
                <div class="modal-body">
                    <?php echo do_shortcode( '[contact-form-7 id="107" title="Berechnen two"]' ); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals - sent1 -->
    <div class="modal calc-form-modal fade sent-mail" id="modalSent1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <?php
                    if ($sent_type_1) { ?>
                        <h2 ><?php echo $sent_type_1?></h2>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Modals - sent2 -->
    <div class="modal calc-form-modal fade sent-mail" id="modalSent2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <?php
                    if ($sent_type_2) { ?>
                        <h2 ><?php echo $sent_type_2?></h2>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php

get_footer();