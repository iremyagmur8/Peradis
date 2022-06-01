
<body>
  <div class="wrapper">
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout3 bg-overlay text-center">
      <div class="bg-img"><img src="../assets/images/gallery/5.jpeg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle__heading"><?= translator('Özel Pera Ağız ve Diş Sağlığı Polikliniği', 'randevu'); ?></h1>
         
            <a href="<?= translator('covid-19-information', 'path'); ?>" class="btn btn__secondary btn__outlined btn__rounded">
              <span><?=translator('covid-19 information','randevu')?></span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->


    <!-- ==========================
          contact layout 2
      =========================== -->
      <section class="contact-layout2 pt-130 ">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="contact-panel d-flex flex-wrap">
              <form class="contact-panel__form" method="post" action="send_mail" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact-panel__title"><?=translator('Online Appointment','randevu')?></h4>
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
              <div
                class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
                <div class="bg-img"><img src="../assets/images/banners/1.jpg" alt="banner"></div>
                <div>
                  <h4 class="contact-panel__title color-white"><?=translator('contact now','footer')?> !</h4>
                  <p class="contact-panel__desc font-weight-bold color-white mb-30"><?=translator('If you have any question or need help don`t hesitate to contact with our team.','footer')?>
                  </p>
                </div>
                <div>
                  <ul class="contact__list list-unstyled mb-30">
                    <li>
                      <i class="icon-phone"></i><a href="tel:+02128435363">0212 843 53 63</a>
                    </li>
                    <li>
                      <i class="icon-phone"></i><a href="tel:+05428435313">0212 843 53 63</a>
                    </li>
                    <li>
                      <i class="icon-location"></i><a href="https://yandex.com.tr/harita/-/CCUiVVd20C">
Ziya Gökalp Mah. Süleyman Demirel Bulvarı Mall of İstanbul no:7F/185 Başakşehir İstanbul</a>
                    </li>
                    <li>
                      <i class="icon-clock"></i><a href="#"><?= translator('monday - saturday: 10:00  - 20:00', 'randevu'); ?></a>
                    </li>
                  </ul>
                  <a href="iletisim" class="btn btn__white btn__rounded btn__outlined"><?=translator('contact us','contact')?></a>
                </div>
              </div>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 2 -->