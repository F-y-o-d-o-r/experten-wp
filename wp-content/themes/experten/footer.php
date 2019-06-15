<?php
$partnerlogos = get_field('partnerlogo');
$titel_company_futter = get_field('titel_company_futter');
$text_company_futter = get_field('text_company_futter');
$kontaktliste = get_field('kontaktliste', "option");
$sozial = get_field("sozial");
$map =get_field('map');


$footer_nav = get_field('footer_nav','option' );

?>
<footer class="footer">
    <div class="container">
        <?php
        if ($partnerlogos) {?>
            <div class="partners-logo__wrap">
                <div class="partners-logo swiper-wrapper">
                    <?php
                    foreach ($partnerlogos as $partnerlogo) {
                        ?>
                        <div class="partners-logo__item swiper-slide">
                            <img src="<?php  echo $partnerlogo['partner-logo_bild']?>">
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <?php
        }
        ?>
        <div class="footer-content d-flex justify-content-between flex-wrap">
            <div class="foot-about">
                <?php
                if ($titel_company_futter) {?>
                    <h2 class="foot-about__title yellow"><?php echo __($titel_company_futter)?></h2>
                    <?php
                }
                if($text_company_futter) {?>
                    <p class="foot-about__dscr"><?php echo __($text_company_futter)?></p>
                    <?php
                }
                ?>
            </div>
            <div class="foot-address d-flex flex-wrap">
                <a href="#form" class="btn-link"><?php echo __('Kontaktieren Sie uns ')?></a>
                <?php if($kontaktliste) :?>
                    <ul class="contact-list">
                        <?php
                        foreach ($kontaktliste as $konItem):
                            if($konItem):?>
                                <li class="contact-list__item"><a href="<?php echo $konItem['kontaktlink']?>" class="contact-list__link"><?php echo $konItem['kontakttext']?></a></li>
                            <?php
                            endif;
                        endforeach; ?>
                        <!--                            <li>-->
                        <!--                                --><?php //if($sozial) {?>
                        <!--                                    <ul class="social">-->
                        <!--                                        --><?php
                        //                                        foreach ($sozial as $socItem) {?>
                        <!--                                            <li class="social__item">-->
                        <!--                                                <a href="--><?php //echo $socItem['soziale_bindung']?><!--" class="social__link"><i class="--><?php //echo $socItem['soziale_ikone']?><!-- " aria-hidden="true"></i></a>-->
                        <!--                                            </li>-->
                        <!--                                            --><?php
                        //                                        }
                        //                                        ?>
                        <!--                                    </ul>-->
                        <!--                                    --><?php
                        //                                } ?>
                        <!---->
                        <!--                            </li>-->
                    </ul>
                <?php endif; ?>
                <?php if ($map) :?>
                    <div class="map">
                        <a href="<?php echo $map['kartenlink']?>" target="_blank" class="map__link"><img src="<?php echo $map['kartenbild']?>"></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if ($map) :?>
            <div class="map-mob">
                <a href="<?php echo $map['kartenlink']?>" target="_blank" class="map-mob__link"><img src="<?php echo $map['kartenbild']?>"></a>
            </div>
        <?php endif; ?>
        <div class="footer-foo">

            <span class="copy"> © <?php echo date('Y');?> BU-experten</span>
            <?php
            if($footer_nav):
                foreach ($footer_nav as $nav_item):?>
                    <a href="<?php echo $nav_item['nav-link']?>" class="footer-foo__link"><?php echo $nav_item['nav-text'] ?></a>
                <?php
                endforeach;
            endif;
            ?>

        </div>
    </div>
</footer>





  </div><!--main-->

<?php wp_footer(); ?>
</body>
</html>
