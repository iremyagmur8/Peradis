

<body>
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout6">
      <div class="bg-img"><img src="../assets/images/sliders/3.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex flex-wrap justify-content-end align-items-center">
            <a href="<?=translator('appointment','path')?>" class="btn btn__white btn__rounded"><?=translator('Online Appointment','dt-halise-baydemir-kavza')?></a>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section class="pt-120 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar has-marign-right">
              <div class="widget widget-member shifted-top">
                <div class="member mb-0">
                  <div class="member__img">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/70/User_icon_BLACK-01.png" alt="member img">
                  </div><!-- /.member-img -->
                  <div class="member__info">
                    <h5 class="member__name"><a href="#"><?=translator('Specialist  Dt.Halise Baydemir Kavza','dt-halise-baydemir-kavza')?></a></h5>
                    <p class="member__job"><?=translator('Specialist in Periodontics','dt-halise-baydemir-kavza')?></p>
                    <!-- <p class="member__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ab aliquam hic excepturi quam et quaerat! Quo sapiente, corrupti sit repellendus corporis dolore, quae quaerat eaque laudantium, distinctio quis earum.</p> -->
                    <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                      <ul class="social-icons list-unstyled mb-0">
                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                      </ul><!-- /.social-icons -->
                    </div>
                  </div><!-- /.member-info -->
                </div><!-- /.member -->
              </div><!-- /.widget-member -->
              <div class="widget widget-help bg-overlay bg-overlay-primary-gradient">
                <div class="bg-img"><img src="assets/images/banners/7.jpeg" alt="background"></div>
                <div class="widget-content">
                  <div class="widget__icon">
                    <i class="icon-call3"></i>
                  </div>
                  <h4 class="widget__title"><?=translator('Emergencies','dt-halise-baydemir-kavza')?></h4>
                  <p class="widget__desc"><?=translator('Please feel free to contact our friendly reception staff with any general or medical inquiry,call us.','dt-halise-baydemir-kavza')?>

                  </p>
                  <a href="tel:+02128435363" class="phone__number">
                                    <i class="icon-phone"></i> <span>0212 843 53 63</span>
                                </a>
                                <a href="tel:+05428435313" class="phone__number">
                                    <i class="icon-phone"></i> <span>0542 843 53 13</span>
                                </a>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-help -->
              <div class="widget widget-schedule">
                <div class="widget-content">
                  <div class="widget__icon">
                    <i class="icon-charity2"></i>
                  </div>
                  <h4 class="widget__title"><?=translator('Working Hours','dt-halise-baydemir-kavza')?> </h4>
                  <ul class="time__list list-unstyled mb-0">
                  <li><span><?=translator('Monday-Saturday','dt-halise-baydemir-kavza')?></span><span>10:00 - 20:00</span></li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-schedule -->
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="text-block mb-50">
              <h5 class="text-block__title"><?=translator('Education','dt-halise-baydemir-kavza')?></h5>
              <!-- <p class="text-block__desc mb-20 font-weight-bold color-secondary">
               Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto non veritatis quam modi perspiciatis, laborum accusantium tenetur facere, quod quo culpa, exercitationem quisquam! Ut ipsam molestias facilis dolores tenetur magnam!</p>
              <p class="text-block__desc mb-20">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure aut ab libero repellat explicabo corporis officia laudantium aspernatur optio in qui asperiores eligendi magnam exercitationem quod autem, atque nobis eaque.</p>
              <p class="text-block__desc mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At commodi vitae natus sed aut! Ipsa deleniti, dolor, veritatis impedit placeat nemo, repellat dignissimos cum ut voluptatibus consectetur laborum nesciunt quidem?</p> -->
            </div><!-- /.text-block -->
            <ul class="details-list list-unstyled mb-60">
            <li>
                <h5 class="details__title"><?=translator('Profession','dt-halise-baydemir-kavza')?></h5>
                <div class="details__content">
                  <p class="mb-0"><?=translator('Specialist in Periodontics','dt-halise-baydemir-kavza')?></p>
                </div>
              </li>
            <li>
                <h5 class="details__title"><?=translator('University','dt-halise-baydemir-kavza')?></h5>
                <div class="details__content">
                  <p class="mb-0"><?translator('Istanbul University Faculty of Dentistry','dt-halise-baydemir-kavza')?>2008</p>
                </div>
              </li>
              <li>
                <h5 class="details__title"><?=translator('Specialist','dt-halise-baydemir-kavza')?></h5>
                <div class="details__content">
                  <p class="mb-0"><?=translator('Bezmialem Vakif University Department of Periodontology','dt-halise-baydemir-kavza')?>&nbsp;&nbsp;2016</p>
                </div>
              </li>
              
              
            </ul>
            <section class="contact-layout4 bg-overlay bg-overlay-secondary-gradient pb-50 pb-50">
              <div class="bg-img"><img src="assets/images/banners/3.jpg" alt="banner"></div>
              <div class="contact-panel mb-0">
              <form class="contact-panel__form" method="post" action="send_mail" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact-panel__title"><?=translator('Online Appointment','dt-halise-baydemir-kavza')?></h4>
                    <p class="contact-panel__desc mb-30"><?=translator('If you have any quesitons or if you need help, do not hesitate to contact our team.','dt-halise-baydemir-kavza')?>
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
            </section><!-- /.contact layout 2 -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
