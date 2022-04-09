<?php

/**
 * Plugin Name: Swiper Carousel
 * Description: Custom plugin with swiper carousel implementation
 * Author: Manthan Ray
 */


//Function that will show swiperjs carousel

function swiper_carousel($atts) {
$a = shortcode_atts( array(
		'src'=> 'something',
	), $atts );

$b = explode(" ", $a['src']);
ob_start();
?>

<link
  rel="stylesheet"
  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
/>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<style>
	.swiper {
        width: 100%;
        height: 100%;
       }
      

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    </style>


<!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
	<?php 
		foreach ($b as $elem) {
  			echo "<div class='swiper-slide'><img src='".$elem."'></div>";
		}
	?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
	</br>
	</br>
	</br>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        cssMode: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
        },
        mousewheel: true,
        keyboard: true,
      });
    </script>
<?php
return ob_get_clean();
}

add_shortcode('swiper-carousel', 'swiper_carousel');
?>