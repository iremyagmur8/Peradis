
<?php
  if (isset($_GET['status'])) {
    if ($_GET['status']=="ok") { ?>
    <p style="color:green; margin:10px;font-size:16px; font-family: Roboto, sans-serif"><i class="fa fa-check" aria-hidden="true"></i>
    <?= translator('Your appointment has been created.','home') ?></p>
    <?php }
      elseif ($_GET['status']=="no") {
        ?>
    <p style="color:red;  margin:10px;font-size:16px; font-family: Roboto, sans-serif"><i class="fas fa-times"></i><?= translator('Your appointment has been created.','home') ?></p>
    <?php }
      }
?>


  <section class="slider">
    <div class="slick-carousel m-slides-0" data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "speed": 700,"fade": true,"cssEase": "linear"}'>
      <div class="slide-item align-v-h">
        <div class="bg-img"><img src="./assets/images/sliders/15.jpg" alt="slide img"></div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7 ">
              <div class="slide__content">
                <span class="slide__subtitle d-none d-lg-block" style="color:#fff; text-shadow:1px 0.5px #213360"><?=translator('For Dental Health and Dental Aesthetics','home')?> </span>
                <span class="slide__subtitle d-lg-none "style="color:#fff; text-shadow:2px 1px #213360"><?=translator('For Dental Health and','home')?> <br> <?=translator('Dental Aesthetics','home')?></span>
                <h2 class="slide__title d-none d-lg-block"> <?=translator('Create an Appointment Now!','home')?>
                </h2>
                <h2 class="slide__title d-lg-none"><?=translator('Create an Appointment Now!','home')?>
                </h2>
                <!-- <span class="slide__subtitle ml-lg-2 d-none d-lg-block" style="font-size: 25px; color:#A7D15C; text-shadow:0.3px 0.2px #fff"> <i class="fas fa-exclamation "></i>&nbsp;Açılışa Özel Panoramik Röntgen <br> Çekimi ve Muayene Ücretsizdir</span>
                <span class="slide__subtitle ml-lg-2 d-lg-none" style="font-size: 15px;  color:#A7D15C; text-shadow:0.3px 0.2px #fff">Açılışa Özel Panoramik <br> Röntgen Çekimi ve <br> Muayene Ücretsizdir!</span> -->

                <ul class="features-list list-unstyled mb-0 mt-30 d-flex flex-wrap ">
                  <!-- feature item #1 -->
                  <li class="feature-item ">
                    <div class="feature__icon">
                      <a><img src="./assets/images/icons/dental 2.png" alt=""></a>
                    </div>
                    <h2 class="feature__title"><?=translator('Implant','home')?></h2>
                  </li><!-- /.feature-item-->
                  <!-- feature item #2 -->
                  <li class="feature-item">
                    <div class="feature__icon">
                      <a><img src="./assets/images/icons/care.png" alt=""></a>
                    </div>
                    <h2 class="feature__title"><?=translator('Porcelain Laminate','home')?></h2>
                  </li><!-- /.feature-item-->

                </ul><!-- /.features-list -->
                <div class="d-flex flex-wrap align-items-center mt-30">
                  <a href="tel:+02128435363" class="btn btn__secondary btn__rounded mr-30">
                    <span><?=translator('Get Information Now','home')?></span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div>
              </div><!-- /.slide-content -->
            </div><!-- /.col-xl-7 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.slide-item -->
      <div class="slide-item align-v-h">
        <div class="bg-img"><img src="assets/images/sliders/7.jpeg" alt="slide img"></div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7 ml-3">
              <div class="slide__content">
                <span class="slide__subtitle"style="color:#fff; text-shadow:1px 0.5px #213360"><?= translator('For Oral and Dental Health You Neglected During the Corona Period','home') ?>
                </span>
                <h2 class="slide__title d-none d-lg-block"> <?=translator('Create an Appointment Now!','home')?>
                </h2>
                <h2 class="slide__title d-lg-none"><?=translator('Create an Appointment Now!','home')?>
                </h2>
                <ul class="features-list list-unstyled mb-0 mt-30 d-flex flex-wrap ">
                  <!-- feature item #1 -->
                  <li class="feature-item">
                    <div class="feature__icon">
                      <a><img src="./assets/images/icons/molar-inside-a-shield 2.png" alt=""></a>
                    </div>
                    <h2 class="feature__title"><?= translator('Gum','home') ?> <br> <?= translator('Diseases','home') ?></h2>
                  </li><!-- /.feature-item-->
                  <!-- feature item #2 -->
                  <li class="feature-item">
                    <div class="feature__icon">
                      <a><img src="./assets/images/icons/dental 2.png" alt=""></a>
                    </div>
                    <h2 class="feature__title"><?=translator('Implant','home')?></h2>
                  </li><!-- /.feature-item-->
                </ul>
                <div class="d-flex flex-wrap align-items-center mt-30">
                  <a href="tel:+02128435363" class="btn btn__secondary btn__rounded mr-30">
                    <span><?=translator('Get Information Now','home')?></span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div>
              </div><!-- /.slide-content -->
            </div><!-- /.col-xl-7 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.slide-item -->
      <div class="slide-item align-v-h">
        <div class="bg-img"><img src="assets/images/sliders/1.jpeg" alt="slide img"></div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7 ml-3">
              <div class="slide__content">
                <span class="slide__subtitle"style="color:#21cdc0; text-shadow:1px 0.5px #fff"><?= translator('Health, Aesthetics and Comfort','home') ?>
                </span>
                <h2 class="slide__title"><?= translator('Pera Oral and Dental Health Polyclinic','home') ?> 
                </h2>
                <h2 class="slide__title d-lg-none"><?=translator('Create an Appointment Now!','home')?>
                </h2>
                <ul class="features-list list-unstyled mb-0 mt-30 d-flex flex-wrap ">
                  <!-- feature item #1 -->
                  <li class="feature-item">
                    <div class="feature__icon">
                      <a><img src="./assets/images/icons/star.png" alt=""></a>
                    </div>
                    <h2 class="feature__title"><?=translator('Teeth Whitening','home')?></h2>
                  </li><!-- /.feature-item-->
                  <!-- feature item #2 -->
                  <li class="feature-item">
                    <div class="feature__icon">
                      <a><img src="./assets/images/icons/tooth.png" alt=""></a>
                    </div>
                    <h2 class="feature__title"><?=translator('Cosmetic Teeth Bonding','home')?></h2>
                  </li><!-- /.feature-item-->
                </ul>
                <div class="d-flex flex-wrap align-items-center mt-30">
                  <a href="tel:+02128435363" class="btn btn__secondary2 btn__rounded mr-30">
                    <span><?=translator('Get Information Now','home')?></span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div>
              </div><!-- /.slide-content -->
            </div><!-- /.col-xl-7 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.slide-item -->
      <div class="slide-item align-v-h">
        <div class="bg-img"><img src="assets/images/sliders/14.png" alt="slide img"></div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7 ml-3">
              <div class="slide__content">
                <span class="slide__subtitle d-none d-lg-block" style="color:#21cdc0; text-shadow:1px 0.5px #fff"><?=translator('Are You Ready for a Brand New Smile?','tedavilerimiz')?>
                </span>
                <span class="slide__subtitle d-lg-none d-block" style="color:#21cdc0; text-shadow:1px 0.5px  #fff"><?=translator('Are You Ready for','tedavilerimiz')?> <br> <?=translator('a Brand New Smile?','tedavilerimiz')?>
                </span>
                <h2 class="slide__title"><?=translator('Let`s','home')?> <br> <?=translator('design together!','home')?>
                </h2>
                <ul class="features-list list-unstyled mb-0 mt-30 d-flex flex-wrap ">
                  <!-- feature item #1 -->
                  <li class="feature-item">
                    <div class="feature__icon">
                      <a><img src="./assets/images/icons/2441135.png" alt=""></a>
                    </div>
                    <h2 class="feature__title"><?=translator('Orthodontics','home')?></h2>
                  </li><!-- /.feature-item-->
                  <!-- feature item #2 -->
                  <li class="feature-item">
                    <div class="feature__icon">
                      <a><img src="./assets/images/icons/smiling.png" alt=""></a>
                    </div>
                    <h2 class="feature__title"><?=translator('Smile Design','home')?></h2>
                  </li><!-- /.feature-item-->
                </ul>
                <div class="d-flex flex-wrap align-items-center mt-30">
                  <a href="tel:+02128435363" class="btn btn__secondary2 btn__rounded mr-30">
                    <span><?=translator('Get Information Now','home')?></span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div>
              </div><!-- /.slide-content -->
            </div><!-- /.col-xl-7 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.slide-item -->
      <div class="slide-item align-v-h">
        <div class="bg-img"><img src="assets/images/sliders/13.jpeg" alt="slide img"></div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7 ml-3">
              <div class="slide__content">
                <span class="slide__subtitle " style="color:#21cdc0; text-shadow:1px 0.5px  #fff"><?=translator('All Your Oral and Dental Health,','home')?>
                </span>
                <h2 class="slide__title"><?=translator('Entrusted','home')?> <br> <?=translator('to our expert dentists','home')?>
                </h2>
                <h2 class="slide__title d-lg-none"><?=translator('Create an Appointment Now!','home')?>
                </h2>
                <ul class="features-list list-unstyled mb-0 mt-30 d-flex flex-wrap ">
                  <!-- feature item #1 -->
                  <li class="feature-item">
                    <div class="feature__icon">
                      <a><img src="./assets/images/icons//extraction.png" alt=""></a>
                    </div>
                    <h2 class="feature__title"><?=translator('20 Years of','home')?> <?=translator('tooth extraction','home')?></h2>
                  </li><!-- /.feature-item-->
                  <!-- feature item #2 -->
                  <li class="feature-item">
                    <div class="feature__icon">
                      <a><img src="./assets/images/icons/braces.png" alt=""></a>
                    </div>
                    <h2 class="feature__title"><?=translator('Pedodontics','home')?></h2>
                  </li><!-- /.feature-item-->
                </ul>
                <div class="d-flex flex-wrap align-items-center mt-30">
                  <a href="tel:+02128435363" class="btn btn__secondary2 btn__rounded mr-30">
                    <span><?=translator('Get Information Now','home')?></span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div>
              </div><!-- /.slide-content -->
            </div><!-- /.col-xl-7 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.slide-item -->

    </div><!-- /.carousel -->
  </section><!-- /.slider -->

  <section class="features-layout4" style="padding-top:0 !important; padding-bottom:0 !important;">
    <div class="carousel-container">
      <div class="slick-carousel m-slides-0" data-slick='{"slidesToShow": 4, "slidesToScroll": 2, "autoplay": true, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
        <!-- feature item #1 -->
        <div class="feature-item d-flex">
          <div class="feature__icon">
            <img src="./assets/images/icons/dental 2.png" alt="">
          </div><!-- /.feature__icon -->
          <div class="feature__content">
            <h4 class="feature__title"><?=translator('implant','header')?></h4>
            <p class="feature__desc"><?=translator('The implant, which is applied by placing titanium screws into the jawbone, is an artificial tooth root. Thanks to the implants, tooth cutting as in traditional crown and bridge prosthesis...','tedavilerimiz')?>
            </p>
            <a href="<?=translator('implant','path')?>" class="btn btn__link btn__secondary">
              <span><?=translator('Read more','tedavilerimiz')?></span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.feature-content -->
        </div>
        <!-- feature item #2 -->
        <div class="feature-item d-flex">
          <div class="feature__icon">
            <img src="./assets/images/icons/root-canal 2.png" alt="">
          </div><!-- /.feature__icon -->
          <div class="feature__content">
            <h4 class="feature__title"><?=translator('endodontics','header')?></h4>
            <p class="feature__desc"><?=translator('It is the main science of root canal treatments. In the treatment of root canal, inflammation in the root of the tooth...','tedavilerimiz')?>
            </p>
            <a href="<?=translator('endodontics','path')?>" class="btn btn__link btn__secondary">
              <span><?=translator('Read more','tedavilerimiz')?></span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.feature-content -->
        </div>
        <!-- /.feature-item -->
        <!-- fancybox item #3 -->
        <div class="feature-item d-flex">
          <div class="feature__icon">
            <img src="./assets/images/icons/2441135.png" alt="">
          </div><!-- /.feature__icon -->
          <div class="feature__content">
            <h4 class="feature__title"><?=translator('orthodontics','header')?></h4>
            <p class="feature__desc"><?=translator('Correction of dental crookedness and jaw anomalies is provided in children and adults. Jaw stenosis, crookedness, lower jaw forward or behind...','tedavilerimiz')?></p>
            <a href="<?=translator('orthodontics','path')?>" class="btn btn__link btn__secondary">
              <span><?=translator('Read more','tedavilerimiz')?></span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.feature-content -->
        </div><!-- /.feature-item -->

        <!-- /.feature-item -->
        <!-- fancybox item #4 -->
        <div class="feature-item d-flex">
          <div class="feature__icon">
            <img src="./assets/images/icons/molar-inside-a-shield 2.png" alt="">
          </div><!-- /.feature__icon -->
          <div class="feature__content">
            <h4 class="feature__title"><?=translator('periodontology','header')?></h4>
            <p class="feature__desc"><?=translator('It is the science that studies the tissues around the teeth. Gum bleeding, tartar accumulation, bad breath, gingival recession or enlargement, tooth enveloping...','tedavilerimiz')?>
            </p>
            <a href="<?=translator('periodontology','path')?>" class="btn btn__link btn__secondary">
              <span><?=translator('Read more','tedavilerimiz')?></span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.feature-content -->
        </div><!-- /.feature-item -->

        <!-- feature item #5-->
        <div class="feature-item d-flex">
          <div class="feature__icon">
            <img src="./assets/images/icons/smiling.png" alt="">
          </div><!-- /.feature__icon -->
          <div class="feature__content">
            <h4 class="feature__title"><?= translator('smile design', 'header'); ?></h4>
            <p class="feature__desc"><?=translator('One of the first concepts that comes to mind when it comes to aesthetic dentistry is ``smile design``. Smile design; its aesthetic appearance for various reasons...','tedavilerimiz')?>
            </p>
            <a href="<?= translator('smile design', 'path'); ?>" class="btn btn__link btn__secondary">
              <span><?=translator('Read more','tedavilerimiz')?></span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.feature-content -->
        </div>
        <!-- /.feature-item -->

        <!-- fancybox item #6 -->
        <div class="feature-item d-flex">
          <div class="feature__icon">
            <img src="./assets/images/icons/dental-veneer.png" alt="">
          </div><!-- /.feature__icon -->
          <div class="feature__content">
            <h4 class="feature__title"><?=translator('dental prosthesis','header')?></h4>
            <p class="feature__desc"> <?=translator('Details such as the number of teeth remaining in the mouth of those with missing teeth, the places where these teeth are located in the mouth, the durability of the teeth, dentists...','tedavilerimiz')?></p>
            <a href="<?=translator('dental-prosthesis','path')?>" class="btn btn__link btn__secondary">
              <span><?=translator('Read more','tedavilerimiz')?></span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.feature-content -->
        </div><!-- /.feature-item -->
        <!-- fancybox item #7 -->
        <div class="feature-item d-flex">
          <div class="feature__icon">
            <img src="./assets/images/icons/star.png" alt="">
          </div><!-- /.feature__icon -->
          <div class="feature__content">
            <h4 class="feature__title"><?=translator('teeth whitening','header')?></h4>
            <p class="feature__desc"><?=translator('Teeth whitening is the process of removing the discoloration that occurs in the structure of the teeth (enamel and dentin layer). As a result of this application, the color of the teeth is clearly...','tedavilerimiz')?>
            </p>
            <a href="<?=translator('teeth-whitening','path')?>" class="btn btn__link btn__secondary">
              <span><?=translator('Read more','tedavilerimiz')?></span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.feature-content -->
        </div><!-- /.feature-item -->
        <!-- fancybox item #8 -->
        <div class="feature-item d-flex">
          <div class="feature__icon">
            <img src="./assets/images/icons/1700090.png" alt="">
          </div><!-- /.feature__icon -->
          <div class="feature__content">
            <h4 class="feature__title"><?=translator('conservative dentistry','header')?></h4>
            <p class="feature__desc"><?=translator('It is the cleaning of dental caries and filling the formed cavity with a suitable filling material. With today`s developing composites...','tedavilerimiz')?>
            </p>
            <a href="<?=translator('conservative-dentistry','path')?>" class="btn btn__link btn__secondary">
              <span><?=translator('Read more','tedavilerimiz')?></span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.feature-content -->
        </div><!-- /.feature-item -->
        <!-- fancybox item #9 -->
        <div class="feature-item d-flex">
          <div class="feature__icon">
            <img src="./assets/images/icons/tooth-whitening 2.png" alt="">
          </div><!-- /.feature__icon -->
          <div class="feature__content">
            <h4 class="feature__title"><?=translator('cosmetic dentistry','header')?> </h4>
            <p class="feature__desc"><?=translator('The goal in cosmetic dentistry is to create natural-looking teeth that are compatible with the person`s face. Aesthetic dentistry is a combination of science, technology and art. Its purpose...','tedavilerimiz')?> </p>
            <a href="<?=translator('cosmetic-dentistry','path')?>" class="btn btn__link btn__secondary">
              <span><?=translator('Read more','tedavilerimiz')?></span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.feature-content -->
        </div>
        <!-- fancybox item #10 -->
        <div class="feature-item d-flex">
          <div class="feature__icon">
            <img src="./assets/images/icons/radyografi.png" alt="">
          </div><!-- /.feature__icon -->
          <div class="feature__content">
            <h4 class="feature__title"><?=translator('radiography','header')?></h4>
            <p class="feature__desc"><?=translator('Panoramic x-rays allow the jaws, bone mass, all teeth, and many ailments in the jaw and teeth to be seen in a single film. Teeth and...','tedavilerimiz')?>
            </p>
            <a href="<?=translator('radiography','path')?>" class="btn btn__link btn__secondary">
              <span><?=translator('Read more','tedavilerimiz')?></span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.feature-content -->
        </div><!-- /.feature-item -->
        <!-- fancybox item #11 -->
        <div class="feature-item d-flex">
          <div class="feature__icon">
            <img src="./assets/images/icons/braces.png" alt="">
          </div><!-- /.feature__icon -->
          <div class="feature__content">
            <h4 class="feature__title"><?=translator('pedodontics','header')?></h4>
            <p class="feature__desc"><?=translator('It includes oral examination, tooth extraction, filling, root canal treatment, fluoride application and fissure sealant treatments in pediatric dentistry.','tedavilerimiz')?>
            </p>
            <a href="<?=translator('pedodontics','path')?>" class="btn btn__link btn__secondary">
              <span><?=translator('Read more','tedavilerimiz')?></span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.feature-content -->
        </div><!-- /.feature-item -->
        <!-- fancybox item #12 -->
        <div class="feature-item d-flex">
          <div class="feature__icon">
            <img src="./assets/images/icons/care.png" alt="">
          </div><!-- /.feature__icon -->
          <div class="feature__content">
            <h4 class="feature__title"><?=translator('porcelain laminates','header')?></h4>
            <p class="feature__desc"><?=translator('It is a type of treatment that has been widely used for aesthetic purposes in recent years. About the shape, color and size of your teeth...','tedavilerimiz')?>

            </p>
            <a href="<?=translator('porcelain-laminates','path')?>" class="btn btn__link btn__secondary">
              <span><?=translator('Read more','tedavilerimiz')?></span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.feature-content -->
        </div><!-- /.feature-item -->
        <!-- fancybox item #13 -->
        <div class="feature-item d-flex">
          <div class="feature__icon">
            <img src="./assets/images/icons/extraction.png" alt="">
          </div><!-- /.feature__icon -->
          <div class="feature__content">
            <h4 class="feature__title"><?=translator('20 years of tooth extraction','header')?></h4>
            <p class="feature__desc"><?=translator('Wisdom teeth are the third molars at the back of the jawbone. It is also known as the `mind tooth` among the people because it lasts between the ages of 16-40...','tedavilerimiz')?>

            </p>
            <a href="<?=translator('20 years-of-tooth-extraction','path')?>" class="btn btn__link btn__secondary">
              <span><?=translator('Read more','tedavilerimiz')?></span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.feature-content -->
        </div><!-- /.feature-item -->
        <!-- fancybox item #14 -->
        <div class="feature-item d-flex">
          <div class="feature__icon">
            <img src="./assets/images/icons/plaque.png" alt="">
          </div><!-- /.feature__icon -->
          <div class="feature__content">
            <h4 class="feature__title"><?=translator('bruksizm','header')?></h4>
            <p class="feature__desc"><?=translator('At night or during the day, as a result of the application of high force to each other, the jawbone joint, chewing muscles and teeth are the result of...','tedavilerimiz')?>
            </p>
            <a href="<?=translator('bruksizm','path')?>" class="btn btn__link btn__secondary">
              <span><?=translator('Read more','tedavilerimiz')?></span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.feature-content -->
        </div><!-- /.feature-item -->
        <!-- fancybox item #15 -->
        <div class="feature-item d-flex">
          <div class="feature__icon">
            <img src="./assets/images/icons/tooth.png" alt="">
          </div><!-- /.feature__icon -->
          <div class="feature__content">
            <h4 class="feature__title"><?=translator('cosmetic teeth bonding','header')?></h4>
            <p class="feature__desc"><?=translator('The goal in cosmetic dentistry is to create natural-looking teeth that are compatible with the person`s face. Cosmetic dentistry is a combination of science, technology and art. Its purpose is to capture ``Healthy and Natural Beauty``.','tedavilerimiz')?>
            </p>
            <a href="<?=translator('bonding','path')?>" class="btn btn__link btn__secondary">
              <span><?=translator('Read more','tedavilerimiz')?></span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.feature-content -->
        </div><!-- /.feature-item -->
        <!-- fancybox item #16 -->
        <div class="feature-item d-flex">
          <div class="feature__icon">
            <img src="./assets/images/icons/jaw.png" alt="">
          </div><!-- /.feature__icon -->
          <div class="feature__content">
            <h4 class="feature__title"><?=translator('jaw cyst operation','header')?></h4>
            <p class="feature__desc"><?=translator('Jaw cysts are fluid-filled cavities that develop at the tip of the tooth roots or develop in any part of the jawbone without tooth origin.','tedavilerimiz')?>


            </p>
            <a href="<?=translator('jaw-cyst-operation','path')?>" class="btn btn__link btn__secondary">
              <span><?=translator('Read more','tedavilerimiz')?></span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.feature-content -->
        </div><!-- /.feature-item -->
      </div><!-- /.slick-carousel -->
    </div><!-- /.carousel-container -->
  </section><!-- /.fancybox-layout4 -->

 
  <section class="about-layout4 pb-0">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6">
          <div class="heading-layout2">
            <h3 class="heading__title mb-40"><?=translator('A New Smile, A New Life','home')?></h3>
          </div><!-- /heading -->
        </div><!-- /.col-12 -->
      </div><!-- /.row -->
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6">
          <div class="about__Text">
            <p class="mb-30"><?=translator('You can have a healthy and beautiful smile with our expert physician staff at Pera Dental Clinic.','home')?>

            </p>
            <p class="mb-30"><?=translator('Feel the change that being able to smile freely will make on your quality of life at Pera Dental Polyclinic located in Başakşehir Mall Of İstanbul.','home')?>
              <?=translator('Together with our expert physician staff, we are always renewing and developing, and we are trying to provide the highest service to our patients by always showing the same devotion.','home')?></p>
            <div class="d-flex align-items-center mb-30">
              <a href="<?= translator('our team', 'path'); ?>" class="btn btn__primary btn__outlined btn__rounded mr-30">
                <?=translator('Meet Our Doctors','hakkimizda')?></a>
            </div>
          </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-sm-12 col-md-12 col-lg-6">
          <div class="video-banner">
            <img src="assets/images/about/4.jpeg" alt="about">
          </div><!-- /.video-banner -->
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.About Layout 4 -->

  <section class="features-layout1 pt-130 pb-50 mt--50">
    <div class="bg-img"><img src="assets/images/backgrounds/1.jpg" alt="background"></div>
    <div class="container">
      <div class="row mb-40">
        <div class="col-sm-12 col-md-12 col-lg-5">
          <div class="heading__layout2">
            <h3 class="heading__title"><?=translator('Let`s Smile Together!','tedavilerimiz')?></h3>
          </div>
        </div><!-- /col-lg-5 -->
        <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
          <p class="heading__desc font-weight-bold"><?=translator('As Pera Dental Polyclinic, our aim is to act with a sense of duty that best meets the demands of our patients and their expectations about oral and dental health.','home')?>
          </p>
          <div class="d-flex flex-wrap align-items-center mt-40 mb-30">
            <a href="<?= translator('appointment', 'path'); ?>" class="btn btn__primary btn__rounded mr-30">
              <span><?=translator('Online Appointment','footer')?></span>
              <i class="icon-arrow-right"></i>
            </a>
            <a href="<?= translator('about', 'path'); ?>" class="btn btn__secondary btn__link">
              <i class="icon-arrow-right icon-filled"></i>
              <span><?=translator('Our Core Values','home')?></span>
            </a>
          </div>
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
      <div class="row">
        <!-- Feature item #1 -->
        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="feature-item">
            <div class="feature__content">
              <div class="feature__icon">
                <img src="./assets/images/icons/doctor.png" alt="">
              </div>
              <h4 class="feature__title"><?=translator('Specialist Physician Staff','home')?></h4>
            </div><!-- /.feature__content -->
            <a href="#" class="btn__link">
              <i class="icon-arrow-right icon-outlined"></i>
            </a>
          </div><!-- /.feature-item -->
        </div><!-- /.col-lg-3 -->
        <!-- Feature item #2 -->
        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="feature-item">
            <div class="feature__content">
              <div class="feature__icon">
                <img src="./assets/images/icons/dentist.png" alt="">

              </div>
              <h4 class="feature__title"><?=translator('cosmetic','home')?> <br> <?=translator('dentistry','home')?>
              </h4>
            </div><!-- /.feature__content -->
            <a href="#" class="btn__link">
              <i class="icon-arrow-right icon-outlined"></i>
            </a>
          </div><!-- /.feature-item -->
        </div><!-- /.col-lg-3 -->
        <!-- Feature item #3 -->
        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="feature-item">
            <div class="feature__content">
              <div class="feature__icon">
                <img src="./assets/images/icons/satisfaction.png" alt="">
              </div>
              <h4 class="feature__title"><?=translator('Patient','home')?> <br> <?=translator('Satisfaction','home')?></h4>
            </div><!-- /.feature__content -->
            <a href="#" class="btn__link">
              <i class="icon-arrow-right icon-outlined"></i>
            </a>
          </div><!-- /.feature-item -->
        </div><!-- /.col-lg-3 -->
        <!-- Feature item #4 -->
        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="feature-item">
            <div class="feature__content">
              <div class="feature__icon">
                <img src="./assets/images/icons/smile.png" alt="">
              </div>
              <h4 class="feature__title"><?=translator('Friendly','home')?> <br> <?=translator('Staff','home')?> </h4>
            </div><!-- /.feature__content -->
            <a href="#" class="btn__link">
              <i class="icon-arrow-right icon-outlined"></i>
            </a>
          </div><!-- /.feature-item -->
        </div><!-- /.col-lg-3 -->
        <!-- Feature item #5 -->
        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="feature-item">
            <div class="feature__content">
              <div class="feature__icon">
                <img src="./assets/images/icons/hygiene.png" alt="">
              </div>
              <h4 class="feature__title"><?=translator('High Quality','home')?> <br> <?=translator('Equipment','home')?></h4>
            </div><!-- /.feature__content -->
            <a href="#" class="btn__link">
              <i class="icon-arrow-right icon-outlined"></i>
            </a>
          </div><!-- /.feature-item -->
        </div><!-- /.col-lg-3 -->
        <!-- Feature item #6 -->
        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="feature-item">
            <div class="feature__content">
              <div class="feature__icon">
                <img src="./assets/images/icons/armchair.png" class="icon-hospital" alt="">
              </div>
              <h4 class="feature__title"><?=translator('Comfortable','home')?> <br><?=translator('Environment','home')?></h4>
            </div><!-- /.feature__content -->
            <a href="#" class="btn__link">
              <i class="icon-arrow-right icon-outlined"></i>
            </a>
          </div><!-- /.feature-item -->
        </div><!-- /.col-lg-3 -->
        <!-- Feature item #7 -->
        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="feature-item">
            <div class="feature__content">
              <div class="feature__icon">
                <img src="./assets/images/icons/muayene.png" alt="">
              </div>
              <h4 class="feature__title"><?=translator('Examination and Planning','home')?></h4>
            </div><!-- /.feature__content -->
            <a href="#" class="btn__link">
              <i class="icon-arrow-right icon-outlined"></i>
            </a>
          </div><!-- /.feature-item -->
        </div><!-- /.col-lg-3 -->
        <!-- Feature item #8 -->
        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="feature-item">
            <div class="feature__content">
              <div class="feature__icon">
                <img src="./assets/images/icons/smiling.png" alt="">
              </div>
              <h4 class="feature__title"><?=translator('Personalized Smile Design','home')?></h4>
            </div><!-- /.feature__content -->
            <a href="#" class="btn__link">
              <i class="icon-arrow-right icon-outlined"></i>
            </a>
          </div><!-- /.feature-item -->
        </div><!-- /.col-lg-3 -->
      </div><!-- /.row -->
      <div class="row">
        <div class="col-md-12 col-lg-6 offset-lg-3 text-center">
          <p class="font-weight-bold mb-0"><?=translator('Serve society by improving quality of life through better health. We have put in place protocols to protect our patients and staff while continuing to provide medically necessary care.','home')?>
            <a href="iletisim" class="color-secondary">
              <span><?=translator('Contact Us For More Information','home')?></span> <i class="icon-arrow-right"></i>
            </a>
          </p>
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.Features Layout 1 -->


  <section class="team-layout2 pb-80">
    <div class="container">
    <div class="row">
          <!-- Member #1 -->
          <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="member">
              <div class="member__img">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/70/User_icon_BLACK-01.png" alt="member img">
              </div><!-- /.member-img -->
              <div class="member__info">
                <h5 class="member__name"><a href="dt-halise-baydemir-kavza"><?=translator('Specialist  Dt.Halise Baydemir Kavza','dt-halise-baydemir-kavza')?></a></h5>
                <p class="member__job"><?=translator('Specialist in Periodontics','dt-halise-baydemir-kavza')?></p>
                <!-- <p class="member__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias laboriosam, dolores quibusdam optio quam fugiat placeat facilis delectus saepe ipsam non beatae eos, perferendis soluta, velit repudiandae eveniet exercitationem incidunt!</p> -->
                <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                  <a href="dt-halise-baydemir-kavza" class="btn btn__secondary btn__link btn__rounded">
                    <span><?=translator('For detailed Information','home')?></span>
                    <i class="icon-arrow-right"></i>
                  </a>
                  <ul class="social-icons list-unstyled mb-0">
                    <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                  </ul><!-- /.social-icons -->
                </div>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-4 -->
          <!-- Member #2 -->
          <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="member">
              <div class="member__img">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/70/User_icon_BLACK-01.png" alt="member img">
              </div><!-- /.member-img -->
              <div class="member__info">
                <h5 class="member__name"><a href="dt-tugba-zengin-celik"><?=translator('Specialist  Dt.Tugba Zengin Celik','dt-tugba-zengin-celik')?></a></h5>
                <p class="member__job"><?=translator('Specialist in Periodontics','dt-tugba-zengin-celik')?> </p>
                <!-- <p class="member__desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem voluptate molestias sapiente, consectetur alias quidem veritatis voluptatibus autem! Exercitationem suscipit minus unde id tempora quibusdam perferendis quam, provident neque enim.</p> -->
                <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                  <a href="dt-tugba-zengin-celik" class="btn btn__secondary btn__link btn__rounded">
                    <span><?=translator('For detailed Information','home')?></span>
                    <i class="icon-arrow-right"></i>
                  </a>
                  <ul class="social-icons list-unstyled mb-0">
                    <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                  </ul><!-- /.social-icons -->
                </div>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-4 -->
        </div> <!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.Team -->

  <section class="contact-layout5 bg-overlay bg-overlay-blue-gradient pb-60">
    <div class="bg-img"><img src="assets/images/banners/3.jpg" alt="banner"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-5 d-flex flex-column justify-content-between">
          <div>
            <div class="heading heading-light mb-30">
              <h3 class="heading__title mb-30">
                <?=translator('To Add Value To Your Smile','home')?>  <?=translator('Create an Appointment!','contact')?></h3>
              <p class="heading__desc">
               <?=translator('As Pera Dental Polyclinic healthcare professionals, our passion is to protect and treat the oral and dental health of our patients. While realizing this passion, we work with dentists who are experts in their fields and use the most advanced technology. Our aim is to provide all kinds of oral and dental health services to our patients and to ensure that every patient leaves our clinics healthy and smiling.','home')?>
              </p>
            </div>
            <div class="d-flex align-items-center mb-sm-5">
              <a href="iletisim" class="btn btn__white btn__outlined btn__rounded"><?=translator('contact us','contact')?></a>
            </div>
          </div>
          <ul class="list-items list-items-layout2 list-items-light list-horizontal list-unstyled mt-2 d-none d-lg-block">
            <li><?=translator('Patient Satisfaction','home')?> </li>
            <li><?=translator('Treatment Success','home')?> </li>
            <li><?=translator('Clinical Comfort','home')?> </li>
            <li><?=translator('High Quality Care','home')?> </li>
            <li><?=translator('Those Who Recommend Pera Dental Clinic to Their Friends','home')?></li>
          </ul>
        </div><!-- /.col-lg-5 -->
        <div class="col-sm-12 col-md-12 col-lg-7 mt-50">
          <div class="contact-panel mb-50">
          <form class="contact-panel__form" method="post" action="send_mail" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact-panel__title"><?=translator('Online Appointment','footer')?></h4>
                    <p class="contact-panel__desc mb-30"><?=translator('If you have any question or need help don`t hesitate to contact with our team.','footer')?>
                    </p>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-news form-group-icon"></i>
                      <input type="text" class="form-control" placeholder="<?= translator('Name','home') ?>" id="contact-name" name="contact-name"
                        required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-news form-group-icon"></i>
                      <input type="text" class="form-control" placeholder="<?= translator('Surname','home') ?>" id="contact-surname" name="contact-surname"
                        required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-email form-group-icon"></i>
                      <input type="email" class="form-control" placeholder="<?= translator('Email','home') ?>" id="contact-email"
                        name="contact-email">
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-phone form-group-icon"></i>
                      <input type="text" class="form-control" placeholder="<?= translator('Phone','home') ?>" id="contact-Phone"
                        name="contact-phone" required>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-12 ml-2">
                    <div class="form-group">
                      <!-- <label for="myfile">Röntgen Seç</label> -->
                      <input type="file" id="myfile" name="contact-file" multiple><br><br>
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                      <span><?=translator('Create an Appointment Now!','home')?></span> <i class="icon-arrow-right"></i>
                    </button>
                    <div class="contact-result"></div>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
          </div>
        </div><!-- /.col-lg-7 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.contact layout 5 -->

  <section class="gallery  pb-90 pt-130 ">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="slick-carousel" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "arrows": true, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
            <a class="popup-gallery-item" href="./assets/images/gallery/1.jpeg">
              <img src="./assets/images/gallery/1.jpeg" alt="gallery img">
            </a>
            <a class="popup-gallery-item" href="./assets/images/gallery/2.jpeg">
              <img src="./assets/images/gallery/2.jpeg" alt="gallery img">
            </a>
            <a class="popup-gallery-item" href="./assets/images/gallery/3.jpeg">
              <img src="./assets/images/gallery/3.jpeg" alt="gallery img">
            </a>
            <a class="popup-gallery-item" href="./assets/images/gallery/4.jpeg">
              <img src="./assets/images/gallery/4.jpeg" alt="gallery img">
            </a>
            <a class="popup-gallery-item" href="./assets/images/gallery/5.jpeg">
              <img src="./assets/images/gallery/5.jpeg" alt="gallery img">
            </a>
            <a class="popup-gallery-item" href="./assets/images/gallery/6.jpeg">
              <img src="./assets/images/gallery/6.jpeg" alt="gallery img">
            </a>
            <a class="popup-gallery-item" href="./assets/images/gallery/7.jpeg">
              <img src="./assets/images/gallery/7.jpeg" alt="gallery img">
            </a>
            <a class="popup-gallery-item" href="./assets/images/gallery/8.jpeg">
              <img src="./assets/images/gallery/8.jpeg" alt="gallery img">
            </a>
            <a class="popup-gallery-item" href="./assets/images/gallery/9.jpeg">
              <img src="./assets/images/gallery/9.jpeg" alt="gallery img">
            </a>

          </div><!-- /.gallery-images-wrapper -->
        </div><!-- /.col-xl-5 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section>
