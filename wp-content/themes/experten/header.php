<?php


wp_head();
$kontaktliste = get_field('kontaktliste', "option")

?>
<!DOCTYPE html>
<html <?php  language_attributes(); ?> xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>BU-experten</title>

</head>

<body <?php body_class(); ?>>
 <div class="main ">
     <?php
      if($kontaktliste){?>
          <div class="pre-header">
              <ul class="contact-list">
                  <?php
                  foreach ($kontaktliste as $konItem){
                      if($konItem){?>
                          <li class="contact-list__item"><a href="<?php echo $konItem['kontaktlink']?>" class="contact-list__link"><?php echo $konItem['kontakttext']?></a></li>
                          <?php
                      }
                  } ?>
              </ul>
          </div>
      <?php
      }
     ?>
     <header class="header">
         <div class="container border d-flex justify-content-between align-items-center">
             <h1 class="logo"><a href="/"><?php echo get_bloginfo('name') ?></a></h1>
             <?php

             if( is_front_page() ) {
                 ?>

                 <a href="#form" class="btn-link"><?php echo __('Kontaktieren sie uns') ?></a>
                 <?php
             }
             ?>
         </div>
     </header>



