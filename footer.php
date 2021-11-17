<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_luxury
 */

?>
<div class="footer">
   <div class="container">
     <div class="row wow fadeInUp" data-wow-delay="0.5s">
       <div class="col-md-3 logo-part">
          <img src = "<?php echo wp_get_attachment_url(get_theme_mod ('custom_logo'));  ?>" />
          <p><?php if ( is_active_sidebar( 'about' ) ) : ?><?php dynamic_sidebar( 'about' ); ?><?php endif; ?></p>
           <div class="footer-social-media">
            <ul>
               <h3> <?php if ( is_active_sidebar( 'social' ) ) : ?><?php dynamic_sidebar( 'social' ); ?><?php endif; ?></h3>
            </ul>
      </div>
       </div>
      <div class="col-md-3 links">
        <ul>
        <li>
        <h3> <?php if ( is_active_sidebar( 'quick' ) ) : ?><?php dynamic_sidebar( 'quick' ); ?><?php endif; ?></h3>
      </li>
      </ul>
    
      </div>
        <div class="col-md-3 contact-footer ">
       <?php if ( is_active_sidebar( 'contact' ) ) : ?><?php dynamic_sidebar( 'contact' ); ?><?php endif; ?>
      </div>
       <div class="col-md-3 payment">
         <h5>We accept</h5>
         <img src="<?php echo get_template_directory_uri() .'/img/we-accept.png' ?>">
       </div>
     </div>
     <div class="row footer-text">
       <div class="col-md-6">
         <p><?php if ( is_active_sidebar( 'copy' ) ) : ?><?php dynamic_sidebar( 'copy' ); ?><?php endif; ?></p>  
       </div>
        <div class="col-md-6 ct-part">
          <p>Design By : 
        <a href="https://www.convergetree.com/"><img src="<?php echo get_template_directory_uri() .'/img/logo-dark.png' ?>"></a></p>
       </div>
     </div>
   </div>
 </div>


        <!--================End Footer Area =================-->
        
        
 
    
    <!-- JS -->
   <?php wp_footer() ;?>
   <script>
    jQuery( document ).ready(function($){
//all code here
new WOW().init();
  $('.vanish').click(function() {
    $('#target').slideUp(500);
    $('.display').slideDown(0);
    $('.vanish').slideUp(0);
});

     $('.display').click(function() {
    $('#target').slideDown(500);
    $('.display').slideUp(0);
    $('.vanish').slideDown(0);
});

$('.owl-one').owlCarousel({
    loop:true,
    margin:10,
   autoplay:true,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:4
        }
    }
});

$('.owl-two').owlCarousel({
    loop:true,
    margin:10,
   autoplay:true,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
})

    $('.owl-three').owlCarousel({
    loop:true,
    margin:10,
   autoplay:true,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
})
    $('.owl-four').owlCarousel({
    loop:true,
    margin:10,
   autoplay:true,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
    $('.owl-five').owlCarousel({
    loop:true,
    margin:10,
   autoplay:true,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

     var top_destination = $('.owl-one');
top_destination.owlCarousel();
// Go to the next item
$('.nextbtn-a').click(function() {
    top_destination.trigger('next.owl.carousel');
})
// Go to the previous item
$('.prebtn-a').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    top_destination.trigger('prev.owl.carousel', [300]);
})
var offer = $('.owl-two');
offer.owlCarousel();
// Go to the next item
$('.nextbtn-b').click(function() {
    offer.trigger('next.owl.carousel');
})
// Go to the previous item
$('.prebtn-b').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    offer.trigger('prev.owl.carousel', [300]);
})
  var blog = $('.owl-three');
blog.owlCarousel();
// Go to the next item
$('.nextbtn-c').click(function() {
    blog.trigger('next.owl.carousel');
})
// Go to the previous item
$('.prebtn-c').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    blog.trigger('prev.owl.carousel', [300]);
})
 var about = $('.owl-four');
about.owlCarousel();
// Go to the next item
$('.nextbtn-d').click(function() {
    about.trigger('next.owl.carousel');
})
// Go to the previous item
$('.prebtn-d').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    about.trigger('prev.owl.carousel', [300]);
})
 var owl = $('.owl-five');
owl.owlCarousel();
// Go to the next item
$('.nextbtn-e').click(function() {
    owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('.prebtn-e').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
})

});
    
    </script>
    

  </body>
</html>
