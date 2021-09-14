  <!--================ Start Footer Area =================-->
  <footer class="footer-area section-padding">
    <div class="container">
      <?php dynamic_sidebar('sidebar_footer') ?>
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