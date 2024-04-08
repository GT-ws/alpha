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
  $eventsTitle = get_field('events_title');
?>

<section class="event-section" id="events">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-md-evenly justify-content-sm-evenly justify-content-evenly">
            <div class="col-log-12">
                <h2 style="text-align: center; margin-top: 75px;"><?php echo $eventsTitle; ?></h2>
            </div>
            <?php
            if (have_rows('event_box')):
                // Loop through rows.
                while (have_rows('event_box')) : the_row();

                    // Load sub field values.
                    $event_title = get_sub_field('event_title');
                    $event_date = get_sub_field('event_date');
                    $event_subtitle = get_sub_field('event_subtitle');
                    $event_image = get_sub_field('event_image');
            ?>
                    <div class="col-lg-4 col-md-6 event-card">
                        <div class="event-image-div">
                            <img src="<?php echo $event_image['url']; ?>" alt="<?php echo $event_image['alt']; ?>">
                            <div class="card-content">
                                <h3>
                                    <?php echo $event_title; ?>
                                    <div class="date"><i class="fa-regular fa-calendar-days"></i> <?php echo $event_date; ?></div>
                                </h3>
                                <p>
                                    <?php echo $event_subtitle; ?>
                                </p>
                                <a href="" target="_blank">
                                    <button class="participate" type="button">Participate</button>
                                </a>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            else :
                // No value.
                // Do something...
            endif;
            ?>
        </div>
    </div>
</section>


  <?php
    get_template_part('templates/footer');
    wp_footer();
  ?>


