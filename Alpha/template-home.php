<?php
/**
 
*Template Name: Home*/
wp_head();

?>

<?php  

 $title=get_field("hero_title");
$subtitle=get_field("hero_subtitle");
get_template_part('templates/header');
$aboutus=get_field("about_us");
$aboutusfield=get_field("about_us_text");

?>
<section class="hero-section" id="home" >
    <div class="container ">
      <div class="row justify-content-between">
        <div class="col-lg-7 hero-text-div">
          <div>
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subtitle; ?></p>
          </div>         
        </div>
        <div class="col-lg-5">
          <div class="hero-image-div mx-auto">
          <img src="images/home_fit_img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about-us-section" id="about-us">
    <div class="container ">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-7">
          <div class="d-none d-lg-block about-us-image-div">
            <img src="images/kep.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-5 col-md-12 about-us-text-div">
          <h2><?php echo $aboutus; ?> </h2>
          <p > <?php echo $aboutusfield; ?> </p>
        </div>
      </div>
    </div>
  </section>

  <?php
// Check rows exists.
if( have_rows('events') ):

    // Loop through rows.
    while( have_rows('events') ) : the_row();

        // Load sub field value.
       echo $event_title = get_sub_field('event_title');

       echo $event_subtitle = get_sub_field('event_subtitle');

       $event_image = get_sub_field('event_image')

       ?>
       <img src="<?php echo $event_image["url"];?>" alt="">
        <?php
    endwhile;

// No value.
else :
    // Do something...
endif;


get_template_part('templates/footer');
 wp_footer();