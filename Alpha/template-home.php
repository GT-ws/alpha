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
$aboutusimg=get_field('about_us_image');


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
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home_fit_img.jpg" alt="">
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
          <img src="<?php echo $aboutusimg; ?>" alt="">
            
          </div>
        </div>
        <div class="col-lg-5 col-md-12 about-us-text-div">
          <h2><?php echo $aboutus; ?></h2>
          <?php echo $aboutusfield; ?> 
        </div>
      </div>
    </div>
  </section>

  <?php
    $eventTitle = get_field('events_title');

    if( have_rows('event_box') ):

      // Loop through rows.
      while( have_rows('event_box') ) : the_row();

        
  
          // Load sub field value.
         $event_title = get_sub_field('event_title');
         
         $event_date = get_sub_field('event_date');
  
         $event_subtitle = get_sub_field('event_subtitle');
  
         $event_image = get_sub_field('event_image');
  
         ?>
                 
         
          <?php
      endwhile;
  
  // No value.
  else :
      // Do something...
  endif;
  
  ?>


  <section class="event-section" id="events">
    <div class="container">
      <div class="row justify-content-lg-between justify-content-md-evenly justify-content-sm-evenly justify-content-evenly">
        <div class="col-log-12">
          <h2 style="text-align: center; margin-top: 75px;"><?php echo $eventTitle;?></h2>
        </div>
        <div class="col-lg-4 col-md-6 event-card">
          <div class="event-image-div">
            <img src="../images/training-event.jpg" alt="">
            <div class="card-content">
              <h3>
                <?php echo $event_title; ?>
                <div class="date"><i class="fa-regular fa-calendar-days"></i> 2024.05.19</div>
              </h3>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt exercitationem iste, voluptatum, quia explicabo laboriosam rem adipisci voluptates.
              </p>
              <a href="" target="_blank">
              <button class="participate" type="button">Participate</button></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 event-card">
          <div class="event-image-div">
            <img src="../images/training-event.jpg" alt="">
            <div class="card-content">
              <h3>
                <?php echo $event_title; ?>
                <div class="date"><i class="fa-regular fa-calendar-days"></i> 2024.05.19</div>
              </h3>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt exercitationem iste, voluptatum, quia explicabo laboriosam rem adipisci voluptates.
              </p>
              <a href="" target="_blank">
              <button class="participate" type="button">Participate</button></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 event-card">
          <div class="event-image-div">
            <img src="../images/training-event.jpg" alt="">
            <div class="card-content">
              <h3>
                Event
                <div class="date"><i class="fa-regular fa-calendar-days"></i> 2024.05.19</div>
              </h3>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt exercitationem iste, voluptatum, quia explicabo laboriosam rem adipisci voluptates.
              </p>
              <a href="" target="_blank">
              <button class="participate" type="button">Participate</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <?php
    get_template_part('templates/footer');
    wp_footer();
  ?>


