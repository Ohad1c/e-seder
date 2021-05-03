<?php get_header();?>

<!-- Showcase Section -->
<section id="showcase" class="showcase text-center">
  <div class="container">
    <h1><?php the_field('page_title')?></h1>
    <h2><?php the_field('page_subtitle')?></h2>
    <form class="contact-form">
      <div class="form-row">
        <div class="col-md-12 col-lg-4">
          <div class="input-box">
            <i class="fas fa-user"></i>
            <input type="text" class="form-control" placeholder="שם">
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <div class="input-box">
            <i class="fas fa-phone fa-flip-horizontal"></i>
            <input type="text" class="form-control" placeholder="טלפון">
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <button type="submit" class="btn btn-primary btn-block">רוצה לשדרג את התיק הפנסיוני שלי</button>
        </div>
      </div>
    </form>
    <div class="showcase__img">
      <img src="<?php the_field('showcase_image');?>" alt="showcase image" class="img-fluid showcase__img">
    </div>
  </div>
</section>

<!-- About Section -->
<section class="about text-center">
  <p id="about"></p>
  <div class="container">
    <div>
      <div class="about__box1">
        <h2 class="about__title-1">
          <?php the_field('about_title_1');?>
        </h2>
        <p class="about__description">
          <?php  nl2br(the_field('about_description_1'));?>
        </p>
      </div>

      <div class="about__process">
        <h2 class="about__title-2 mb-5"><?php the_field('about_title_2');?></h2>

        <div class="row ">
          <div class="col-md-12 col-lg-3">
            <img src="<?php the_field('about_icon-1');?>" alt="icon 1" class="img-fluid mb-3">
            <p><?php the_field('about_icon-1_description');?></p>
          </div>
          <div class="col-md-12 col-lg-3">
            <img src="<?php the_field('about_icon-2');?>" alt="icon 1" class="img-fluid mb-3">
            <p><?php the_field('about_icon-2_description');?></p>
          </div>
          <div class="col-md-12 col-lg-3">
            <img src="<?php the_field('about_icon-3');?>" alt="icon 1" class="img-fluid mb-3">
            <p><?php the_field('about_icon-3_description');?></p>
          </div>
          <div class="col-md-12 col-lg-3">
            <img src="<?php the_field('about_icon-4');?>" alt="icon 1" class="img-fluid mb-3">
            <p><?php the_field('about_icon-4_description');?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="about__last">
    <div class="container">
      <p><?php the_field('about_paragraph_1');?></p>
      <p><?php the_field('about_paragraph_2');?></p>
      <p><?php the_field('about_paragraph_3');?></p>
    </div>
  </div>
</section>

<!-- Advantages Section -->
<section class="advantages">
  <p id="advantages"></p>
  <div class="container">
    <ul class="nav nav-pills" id="pills-tab" role="tablist">
      <li class="nav-item border border-white" role="presentation">
        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><?php the_field('advantage_tab_1');?></a>
      </li>
      <li class="nav-item border border-white" role="presentation">
        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><?php the_field('advantage_tab_2');?></a>
      </li>
      <li class="nav-item border border-white" role="presentation">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><?php the_field('advantage_tab_3');?></a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <?php nl2br(the_field('first_advantage'));?>
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <?php nl2br(the_field('second_advantage'));?>
      </div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <?php nl2br(the_field('third_advantage'));?>
      </div>
    </div>
    <div class="advantages__img">
      <img src="<?php the_field('advantage_image');?>" alt="advantage image" class="img-fluid">
    </div>
  </div>
</section>

<!-- Contact Us Section -->
<section id="contact" class="contact">
  <div class="container">
    <h2 class="contact__title">
      <?php the_field('contact_title');?>
    </h2>
    <img src="<?php the_field('contact_image');?>" alt="contact image" class="img-fluid contact__img">

    <form class="contact-form">
      <div class="form-row">
        <div class="col-md-12 col-lg-4">
          <div class="input-box">
            <i class="fas fa-user"></i>
            <input type="text" class="form-control" placeholder="שם">
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <div class="input-box">
            <i class="fas fa-phone fa-flip-horizontal"></i>
            <input type="text" class="form-control" placeholder="טלפון">
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <button type="submit" class="btn btn-primary btn-block">רוצה לשדרג את התיק הפנסיוני שלי</button>
        </div>
      </div>
    </form>
  </div>
</section>


<?php get_footer();?>
