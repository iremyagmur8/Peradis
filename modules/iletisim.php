<body>

  <!-- ========================= 
            Google Map
    =========================  -->
  <section class="google-map py-0">
    <div style="position:relative;overflow:hidden;"><a href="https://yandex.com.tr/harita/org/ozel_pera_agiz_ve_dis_sagligi_poliklinigi/179250494015/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Özel Pera Ağız ve Diş Sağlığı Polikliniği</a><a href="https://yandex.com.tr/harita/115693/basaksehir/category/dental_clinics/184106132/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Başakşehir için Özel ağız ve diş sağlığı klinikleri ve muayenehaneleri</a><iframe src="https://yandex.com.tr/map-widget/v1/-/CCUiVBSNGB" width="100%" height="500" frameborder="0" allowfullscreen="true" style="position:relative;"></iframe></div>
  </section><!-- /.GoogleMap -->


  <!-- ==========================
        contact layout 1
    =========================== -->
  <section class="contact-layout1 pt-0 mt--100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="contact-panel d-flex flex-wrap">
          <form class="contact-panel__form" method="post" action="send_mail" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact-panel__title"><?=translator('Online Appointment','contact')?></h4>
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
                      <span><?=translator('Create an Appointment','contact')?></span> <i class="icon-arrow-right"></i>
                    </button>
                    <div class="contact-result"></div>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
            <div class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
              <div class="bg-img"><img src="../assets/images/banners/1.jpeg" alt="banner"></div>
              <div>
                <h4 class="contact-panel__title color-white"><?=translator('contact now','contact')?></h4>
                <p class="contact-panel__desc font-weight-bold color-white mb-30"><?=translator('If you have any question or need help don`t hesitate to contact with our team.','contact')?>
                </p>
              </div>
              <div>
                <ul class="contact__list list-unstyled mb-30">
                  <li>
                    <i class="icon-phone"></i><a href="tel:+02128435363">0212 843 53 63 <br></a>
                    <i class="icon-phone"></i><a href="tel:+05428435313">0542 843 53 13</a>
                  </li>
                  <li>
                    <i class="icon-location"></i><a href="https://yandex.com.tr/harita/-/CCUiVVd20C">
Ziya Gökalp Mah. Süleyman Demirel Bulvarı Mall of İstanbul no:7F/185 Başakşehir İstanbul</a>
                  </li>
                  <a href="iletisim" class="btn btn__primary btn__link mr-30  mb-20"  style="background:white;padding:10px; border-radius:50px;">
                    <i class="icon-arrow-right"></i> <span><?=translator('get directions','contact')?></span>
                  </a>
                  <li>
                    <i class="icon-clock"></i><a href="#"><?=translator('monday - saturday: 10:00  - 20:00','contact')?></a>
                  </li>
                </ul>
                <a href="iletisim" class="btn btn__white btn__rounded btn__outlined"><?=translator('contact us','contact')?></a>
              </div>
            </div>
          </div>
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.contact layout 1 -->

  <section class="about-layout1 pb-130" id="#nasilgiderim">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="heading-layout2">
            <h3 class="heading__title mb-40 text-center">
              <?= translator('How do I get to ...?','contact') ?></h3>
          </div><!-- /heading -->
        </div><!-- /.col-12 -->
      </div><!-- /.row -->
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 ">
          <div class="about__Text transport">
            <i class="fas fa-subway fa-5x mb-20"></i>
            <h4 class="mb-30"><?= translator('Transport','contact') ?></h4>
            <h6 class="trans-name">Taksim</h6>
            <p class="mb-0"></p>
            <p><?= translator('Take the Taksim metro to Yenikapı. From Yenikapı, take the Kirazlı - Bağcılar metro. Get off at Kirazlı stop and transfer to Başakşehir - Metrokent metro. Take the M9 Bahariye metro from İkitelli Sanayi stop. Get off at the Masko Mall of Istanbul stop.','contact') ?></p>
            <h6 class="trans-name">Mecidiyeköy</h6>
            <p><?= translator('Take the Mecidiyeköy-Mahbutbey metro to Mahmutbey. Transfer to Başakşehir - Metrokent metro from Mahmutbey station. Get off at İkitelli, take the Bahariye metro. Get off at Masko Mall Of Istanbul stop.','contact') ?>
            </p>
            <h6 class="trans-name">Anadolu Yakası</h6>
            <p><?= translator('Take the Marmaray to Yenikapı. From Yenikapı, take the Kirazlı - Bağcılar metro. Get off at Kirazlı stop and transfer to Başakşehir - Metrokent Metro. Get off at İkitelli Sanayi stop. Transfer to Bahariye metro and get off at Masko Mall of Istanbul stop.','contact') ?>
            </p>
            <h6 class="trans-name">Levent</h6>
            <p><?= translator('Get off at the Meciyeköy stop with the Levent Metro. Take the Mecidiyeköy-Mahbutbey metro to Mahmutbey. Transfer to Başakşehir - Metrokent metro from Mahmutbey station. Get off at İkitelli, take the Bahariye metro. Get off at Masko Mall Of Istanbul stop.','contact') ?>
            </p>
            
            <i class="fas fa-bus-alt fa-5x mb-20 mt-50"></i>
            <h4 class="mb-30"><?= translator('Bus','contact') ?></h4>
            <h5 class="trans-name"><?= translator('BUSES PASSING THROUGH DEMİRCİLER SITE STOP','contact') ?></h5>
            <p class="mb-0"></p>
            <p><strong class="trans-num">98H </strong>BAŞAKŞEHİR METROKENT/ MEHMET AKİF MAHALLESİ-BAKIRKÖY</p>
            <p><strong class="trans-num">146T </strong>BOĞAZKÖY/ BAHÇEŞEHİR-YENİKAPI</p>
            <p><strong class="trans-num">76O </strong> AVCILAR CİHANGİR MAHALLESİ- OTOGAR</p>
            <p><strong class="trans-num">MK31 </strong> K.S.S.HASTANESİ /M.AKİF MAH.-BAŞAKŞEHİR/ FENERTEPE</p>
            <p><strong class="trans-num">144M </strong>DELİKLİKAYA/BAHÇEŞEHİR-MAHMUTBEY METRO</p>
            <p><strong class="trans-num">78G </strong>FENERTEPE PERONLAR/BAŞAKŞEHİR-GÜVERCİNTEPE/KAY</p>
            <p><strong class="trans-num">76A </strong>KİPTAŞ VADİTEPE/ISPARTAKULE BİZİMEVLER-YENİKAPI</p>
            <p><strong class="trans-num">78B </strong>FENERTEPE PERONLAR/BAŞAKŞEHİR-YENİBOSNA METRO</p>
            <p><strong class="trans-num">146M </strong>FENERTEPE PERONLAR/ BAŞAKŞEHİR 1.2.ETAPLAR-MECİDİYEKÖY</p>
          </div>
        </div><!-- /.col-lg-6 -->


        <div class="col-sm-12 col-md-12 col-lg-6 ">
          <div class="about__Text transport">
            <i class="fas fa-car fa-5x mb-20"></i>
            <h4 class="mb-30"><?= translator('Car','contact') ?></h4>
            <h6 class="trans-name"><?= translator('On the way from the E-5','contact') ?></h6>
            <p class="mb-0"></p>
            <p><?= translator('Cross the Golden Horn Bridge on the E-5. Continue in the direction of the TEM Istanbul-Edirne connection highway. Take the last exit (Olympic Stadium) before arriving at Mahmutbey toll booths. When you turn from the first right, you can enter the Mall of Istanbul parking lot.','contact')?></p>
            <h6 class="trans-name"><?= translator('On the way from Tem') ?></h6>
            <p><?= translator('Take the TEM Istanbul-Edirne highway. Take the last exit (Olympic Stadium) before arriving at Mahmutbey toll booths. When you turn from the first right, you can enter the Mall of Istanbul parking lot.','contact') ?>
            </p>
            <h6 class="trans-name"><?= translator('Yavuz Sultan Selim Bridge','contact') ?></h6>
            <p><?= translator('It takes 30 minutes to reach Mall of Istanbul from the furthest point of the Anatolian side of Istanbul. Passing the 3rd bridge of the Bosphorus, Yavuz Sultan Selim Bridge, continue on 0-6 European direction and turn from Odayeri Junction. Continue in the direction of Halkalı Başakşehir exit (to the right). You can enter the indoor parking lot of Mall Of Istanbul.','contact') ?>
            </p>
            <h6 class="trans-name"><?= translator('Avrasya Tunnel','contact') ?></h6>
            <p><?= translator('At the exit of the tunnel, pass Yeşilyurt. You can come to Mall of Istanbul by following the Basın Ekspress road from the old airport.','contact') ?>
            </p>
            
          </div>
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.About Layout 1 -->
  <!-- ========================= 

     gallery
    =========================== -->
  <section class="gallery  pb-90 pt-40 ">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="slick-carousel" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "arrows": true, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
            <a class="popup-gallery-item" href="../assets/images/gallery/1.jpeg">
              <img src="../assets/images/gallery/1.jpeg" alt="gallery img">
            </a>
            <a class="popup-gallery-item" href="../assets/images/gallery/2.jpeg">
              <img src="../assets/images/gallery/2.jpeg" alt="gallery img">
            </a>
            <a class="popup-gallery-item" href="../assets/images/gallery/3.jpeg">
              <img src="../assets/images/gallery/3.jpeg" alt="gallery img">
            </a>
            <a class="popup-gallery-item" href="../assets/images/gallery/4.jpeg">
              <img src="../assets/images/gallery/4.jpeg" alt="gallery img">
            </a>
            <a class="popup-gallery-item" href="../assets/images/gallery/5.jpeg">
              <img src="../assets/images/gallery/5.jpeg" alt="gallery img">
            </a>
            <a class="popup-gallery-item" href="../assets/images/gallery/6.jpeg">
              <img src="../assets/images/gallery/6.jpeg" alt="gallery img">
            </a>
            <a class="popup-gallery-item" href="../assets/images/gallery/7.jpeg">
              <img src="../assets/images/gallery/7.jpeg" alt="gallery img">
            </a>
            <a class="popup-gallery-item" href="../assets/images/gallery/8.jpeg">
              <img src="../assets/images/gallery/8.jpeg" alt="gallery img">
            </a>
            <a class="popup-gallery-item" href="../assets/images/gallery/9.jpeg">
              <img src="../assets/images/gallery/9.jpeg" alt="gallery img">
            </a>

          </div><!-- /.gallery-images-wrapper -->
        </div><!-- /.col-xl-5 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.gallery 2 -->