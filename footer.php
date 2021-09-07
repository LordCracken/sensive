  <!--================ Start Footer Area =================-->
  <footer class="footer-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>About Us</h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
              magna aliqua.
            </p>
          </div>
        </div>
        <div class="col-lg-4  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Newsletter</h6>
            <p>Stay update with our latest</p>
            <div class="" id="mc_embed_signup">

              <form target="_blank" novalidate="true" action="" method="get" class="form-inline">
                <div class="d-flex flex-row">
                  <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                  <button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
                  <div style="position: absolute; left: -5000px;">
                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                  </div>
                  <!-- <div class="col-lg-4 col-md-4">
                        <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                      </div>  -->
                </div>
                <div class="info"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget mail-chimp">
            <h6 class="mb-20">Instragram Feed</h6>
            <ul class="instafeed d-flex flex-wrap">
              <li><img src="img/instagram/i1.jpg" alt=""></li>
              <li><img src="img/instagram/i2.jpg" alt=""></li>
              <li><img src="img/instagram/i3.jpg" alt=""></li>
              <li><img src="img/instagram/i4.jpg" alt=""></li>
              <li><img src="img/instagram/i5.jpg" alt=""></li>
              <li><img src="img/instagram/i6.jpg" alt=""></li>
              <li><img src="img/instagram/i7.jpg" alt=""></li>
              <li><img src="img/instagram/i8.jpg" alt=""></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Follow Us</h6>
            <p>Let us be social</p>
            <div class="footer-social d-flex align-items-center">
              <a href="<?php the_field('facebook', get_option('page_on_front')) ?>">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="<?php the_field('twitter', get_option('page_on_front')) ?>">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="<?php the_field('dribbble', get_option('page_on_front')) ?>">
                <i class="fab fa-dribbble"></i>
              </a>
              <a href="<?php the_field('behance', get_option('page_on_front')) ?>">
                <i class="fab fa-behance"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
        <p class="footer-text m-0">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> <?php echo __('All rights reserved', 'sensive') ?> | <?php the_field('copyright', get_option('page_on_front')) ?>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </div>
  </footer>
  <!--================ End Footer Area =================-->
  <?php wp_footer() ?>
  <? if ($args['has_slider']) : ?>
    <script>
      if ($('.blog-slider').length) {
        $('.blog-slider').owlCarousel({
          loop: true,
          margin: 30,
          items: 1,
          nav: true,
          autoplay: 2500,
          smartSpeed: 1500,
          dots: false,
          responsiveClass: true,
          navText: [
            "<div class='blog-slider__leftArrow'><img src='<? echo get_template_directory_uri() ?>/img/home/left-arrow.png'></div>",
            "<div class='blog-slider__rightArrow'><img src='<? echo get_template_directory_uri() ?>/img/home/right-arrow.png'></div>"
          ],
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 2
            },
            1000: {
              items: 3
            }
          }
        })
      }
    </script>
  <? endif ?>
  </body>

  </html>