<?php
/*
Template Name: Contact
*/
__('Contact', 'sensive');
?>
<?php
$hero_content = '
<h1>' . get_the_title() . '</h1>
<nav aria-label="breadcrumb" class="banner-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="' . get_home_url() . '">' . __('Home', 'sensive') . '</a></li>
    <li class="breadcrumb-item active" aria-current="page">' . __('Contact Us', 'sensive') . '</li>
  </ol>

</nav>';
$address = get_field('address');
$phone = get_field('phone');
$mail = get_field('mail');

$phone_link_number = preg_replace('![^0-9]+!', '', $phone['number']);

get_header(null, ['content' => $hero_content]) ?>

<!-- ================ contact section start ================= -->
<section class="section-margin--small section-margin">
  <div class="container">
    <div class="d-none d-sm-block mb-5 pb-4">
      <div id="map" style="height: 420px;"></div>
      <script>
        function initMap() {
          var uluru = {
            lat: -25.363,
            lng: 131.044
          };
          var grayStyles = [{
              featureType: "all",
              stylers: [{
                  saturation: -90
                },
                {
                  lightness: 50
                }
              ]
            },
            {
              elementType: 'labels.text.fill',
              stylers: [{
                color: '#A3A3A3'
              }]
            }
          ];
          var map = new google.maps.Map(document.getElementById('map'), {
            center: {
              lat: -31.197,
              lng: 150.744
            },
            zoom: 9,
            styles: grayStyles,
            scrollwheel: false
          });
        }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>

    </div>


    <div class="row">
      <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-home"></i></span>
          <div class="media-body">
            <h3><?php echo $address['first_address'] ?></h3>
            <p><?php echo $address['second_address'] ?></p>
          </div>
        </div>
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-headphone"></i></span>
          <div class="media-body">
            <h3><a href="tel:<?php echo $phone_link_number ?>"><?php echo $phone['number'] ?></a></h3>
            <p><?php echo $phone['time'] ?></p>
          </div>
        </div>
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-email"></i></span>
          <div class="media-body">
            <h3><a href="mailto:<?php echo $mail['email'] ?>"><?php echo $mail['email'] ?></a></h3>
            <p><?php echo $mail['message'] ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-lg-9">
        <?php echo do_shortcode('[contact-form-7 id="124" html_class="form-contact contact_form" title="Виджет формы подписки"]') ?>
      </div>
    </div>
  </div>
</section>
<!-- ================ contact section end ================= -->

<? get_footer() ?>