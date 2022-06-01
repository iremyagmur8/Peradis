   <!-- ========================
      Footer
    ========================== -->
<?php include './lib/script.php'; ?>
<a target="_blank" href="https://api.whatsapp.com/send?phone=905428435313&text=Merhaba%20" class="btn-whatsapp-pulse">
	<i class="fab fa-whatsapp"></i>
</a>

    <footer class="footer">
      <div class="footer-primary">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
              <div class="footer-widget-about">
               <a href="<?=translator('home','path')?>"> <img src="../assets/images/logo/logo-yedek.jpeg" alt="logo" class="mb-30" width="127" height="100"> </a>
                <p class="color-gray"><?=translator('Choose Pera Dental Clinic to smile more!','footer')?>
                </p>
                <a href="<?=translator('appointment','path')?>" class="btn btn__primary btn__primary-style2 btn__link">
                  <span><?=translator('Online Appointment','contact')?></span> <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-xl-2 -->
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="footer-widget-nav">
                <h6 class="footer-widget__title"><?=translator('about','footer')?></h6>
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="<?=translator('about','path')?>"><?=translator('about','footer')?></a></li>
                    <li><a href="<?=translator('covid-19 information','path')?>"><?=translator('covid-19 information','footer')?></a></li>
                    <li><a href="<?=translator('our-team','path')?>"><?=translator('our-team','footer')?></a></li>
                    <li><a href="<?=translator('gallery','path')?>"><?=translator('gallery','footer')?></a></li>
                    <li><a href="<?=translator('contact','path')?>"><?=translator('contact','footer')?></a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="footer-widget-contact">
                <h6 class="footer-widget__title color-heading"><?=translator('contact now','footer')?></h6>
                <ul class="contact-list list-unstyled">
                  <li><?=translator('If you have any question or need help don`t hesitate to contact with our team.','footer')?>
                  </li>
                  <li class="mb-5">
                    <a href="tel:02128435363" class="phone__number">
                      <i class="icon-phone"></i> <span>0212 843 53 63</span>
                    </a>
                    <a href="tel:05428435313" class="phone__number p-0 m-0">
                      <i class="icon-phone"></i> <span>0542 843 53 13</span>
                    </a>
                  </li>
                  <li class="color-body">
Ziya Gökalp Mah. Süleyman Demirel Bulvarı Mall of İstanbul no:7F/185 Başakşehir İstanbul</li>
                </ul>
                <div class="d-flex align-items-center">
                <a href="<?=translator('contact','path')?>" class="btn btn__primary btn__link mr-30  mb-0"  style="background:#21cdc0;padding:10px;color:white; border-radius:50px;">
                    <i class="icon-arrow-right"></i> <span><?=translator('get directions','footer')?></span>
                  </a>
                  <ul class="social-icons list-unstyled mb-0">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/peradis.mallofistanbul/?hl=tr"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul><!-- /.social-icons -->
                </div>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-primary -->
      <div class="footer-secondary">
        <div class="container">
          <div class="row align-items-center text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <span><?= translator('The information contained in the site is for informing, this information does not replace the physician`s examination or diagnosis of the patient for medical purposes.','footer') ?><br><br>
              <span class="fz-14">&copy; <?= translator('Pera Oral Health and Dental Clinic','footer') ?> &copy; 2021. | <?=translator('all rights reserved','footer')?></span>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-secondary -->
    </footer><!-- /.Footer -->
    <div class="search-popup">
      <button type="button" class="search-popup__close"><i class="fas fa-times"></i></button>
      <form class="search-popup__form">
        <input type="text" class="search-popup__form__input" placeholder="Type Words Then Enter">
        <button class="search-popup__btn"><i class="icon-search"></i></button>
      </form>
    </div><!-- /. search-popup -->
    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
  </div><!-- /.wrapper -->


  </body>

</html>