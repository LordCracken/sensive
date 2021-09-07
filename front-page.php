<?php
/*
Template Name: Home
*/
__('Home', 'sensive');
?>
<?php
$hero_content =  get_the_content() . "<h1>" . get_the_title() . "</h1>";
get_header(null, ['content' => $hero_content]) ?>

<!--================ Blog slider start =================-->
<section>
  <div class="container">
    <div class="owl-carousel owl-theme blog-slider">
      <div class="card blog__slide text-center">
        <div class="blog__slide__img">
          <img class="card-img rounded-0" src="<? echo get_template_directory_uri() ?>/img/blog/blog-slider/blog-slide1.png" alt="">
        </div>
        <div class="blog__slide__content">
          <h3><a href="#">New york fashion week's continued the evolution</a></h3>
          <p>2 days ago</p>
        </div>
      </div>
      <div class="card blog__slide text-center">
        <div class="blog__slide__img">
          <img class="card-img rounded-0" src="<? echo get_template_directory_uri() ?>/img/blog/blog-slider/blog-slide2.png" alt="">
        </div>
        <div class="blog__slide__content">
          <h3><a href="#">New york fashion week's continued the evolution</a></h3>
          <p>2 days ago</p>
        </div>
      </div>
      <div class="card blog__slide text-center">
        <div class="blog__slide__img">
          <img class="card-img rounded-0" src="<? echo get_template_directory_uri() ?>/img/blog/blog-slider/blog-slide3.png" alt="">
        </div>
        <div class="blog__slide__content">
          <h3><a href="#">New york fashion week's continued the evolution</a></h3>
          <p>2 days ago</p>
        </div>
      </div>
      <div class="card blog__slide text-center">
        <div class="blog__slide__img">
          <img class="card-img rounded-0" src="<? echo get_template_directory_uri() ?>/img/blog/blog-slider/blog-slide1.png" alt="">
        </div>
        <div class="blog__slide__content">
          <h3><a href="#">New york fashion week's continued the evolution</a></h3>
          <p>2 days ago</p>
        </div>
      </div>
      <div class="card blog__slide text-center">
        <div class="blog__slide__img">
          <img class="card-img rounded-0" src="<? echo get_template_directory_uri() ?>/img/blog/blog-slider/blog-slide2.png" alt="">
        </div>
        <div class="blog__slide__content">
          <h3><a href="#">New york fashion week's continued the evolution</a></h3>
          <p>2 days ago</p>
        </div>
      </div>
      <div class="card blog__slide text-center">
        <div class="blog__slide__img">
          <img class="card-img rounded-0" src="<? echo get_template_directory_uri() ?>/img/blog/blog-slider/blog-slide3.png" alt="">
        </div>
        <div class="blog__slide__content">
          <h3><a href="#">New york fashion week's continued the evolution</a></h3>
          <p>2 days ago</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================ Blog slider end =================-->

<!--================ Start Blog Post Area =================-->
<section class="blog-post-area section-margin mt-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="single-recent-blog-post">
          <div class="thumb">
            <img class="img-fluid" src="<? echo get_template_directory_uri() ?>/img/blog/blog1.png" alt="">
            <ul class="thumb-info">
              <li><a href="#"><i class="ti-user"></i>Admin</a></li>
              <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
              <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
            </ul>
          </div>
          <div class="details mt-20">
            <a href="blog-single.html">
              <h3>Woman claims husband wants to name baby girl
                after his ex-lover sparking.</h3>
            </a>
            <p class="tag-list-inline">Category: <a href="archive.html">Travel</a>
            <p class="tag-list-inline">Tag: <a href="archive.html">life style</a>, <a href="archive.html">technology</a>, <a href="archive.html">fashion</a></p>
            <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>
            <a class="button" href="blog-details.html">Read More <i class="ti-arrow-right"></i></a>
          </div>
        </div>

        <div class="single-recent-blog-post">
          <div class="thumb">
            <img class="img-fluid" src="<? echo get_template_directory_uri() ?>/img/blog/blog2.png" alt="">
            <ul class="thumb-info">
              <li><a href="#"><i class="ti-user"></i>Admin</a></li>
              <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
              <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
            </ul>
          </div>
          <div class="details mt-20">
            <a href="blog-single.html">
              <h3>Woman claims husband wants to name baby girl
                after his ex-lover sparking.</h3>
            </a>
            <p class="tag-list-inline">Category: <a href="archive.html">Technology</a>
            <p class="tag-list-inline">Tag: <a href="archive.html">travel</a>, <a href="archive.html">life style</a>, <a href="archive.html">technology</a>, <a href="archive.html">fashion</a></p>
            <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>
            <a class="button" href="blog-details.html">Read More <i class="ti-arrow-right"></i></a>
          </div>
        </div>

        <div class="single-recent-blog-post">
          <div class="thumb">
            <img class="img-fluid" src="<? echo get_template_directory_uri() ?>/img/blog/blog3.png" alt="">
            <ul class="thumb-info">
              <li><a href="#"><i class="ti-user"></i>Admin</a></li>
              <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
              <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
            </ul>
          </div>
          <div class="details mt-20">
            <a href="blog-single.html">
              <h3>Tourist deaths in Costa Rica jeopardize safe dest
                ination reputation all time. </h3>
            </a>
            <p class="tag-list-inline">Category: <a href="archive.html">Fashion</a>
            <p class="tag-list-inline">Tag: <a href="archive.html">life style</a>, <a href="archive.html">technology</a></p>
            <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>
            <a class="button" href="blog-details.html">Read More <i class="ti-arrow-right"></i></a>
          </div>
        </div>

        <div class="single-recent-blog-post">
          <div class="thumb">
            <img class="img-fluid" src="<? echo get_template_directory_uri() ?>/img/blog/blog4.png" alt="">
            <ul class="thumb-info">
              <li><a href="#"><i class="ti-user"></i>Admin</a></li>
              <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
              <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
            </ul>
          </div>
          <div class="details mt-20">
            <a href="blog-single.html">
              <h3>Tourist deaths in Costa Rica jeopardize safe dest
                ination reputation all time. </h3>
            </a>
            <p class="tag-list-inline">Category: <a href="archive.html">travel</a>
            <p class="tag-list-inline">Tag: <a href="archive.html">life style</a>, <a href="archive.html">technology</a></p>
            <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>
            <a class="button" href="blog-details.html">Read More <i class="ti-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Start Blog Post Siddebar -->
      <div class="col-lg-4 sidebar-widgets">
        <div class="widget-wrap">
          <div class="single-sidebar-widget newsletter-widget">
            <form action="#">
              <div class="d-flex flex-row">
                <input class="form-control" name="q" placeholder="Search" required="" type="text" value="">
                <button class="click-btn btn btn-default bbtns"><i class="ti-search"></i></button>
              </div>
            </form>
          </div>

          <!-- <div class="single-sidebar-widget newsletter-widget">
                  <h4 class="single-sidebar-widget__title">Newsletter</h4>
                  <div class="form-group mt-30">
                    <div class="col-autos">
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter email'">
                    </div>
                  </div>
                  <button class="bbtns d-block mt-20 w-100">Subcribe</button>
                </div> -->

          <div class="single-sidebar-widget post-category-widget">
            <h4 class="single-sidebar-widget__title">Category</h4>
            <ul class="cat-list mt-20">
              <li>
                <a href="archive.html" class="d-flex justify-content-between">
                  <p>Technology</p>
                  <p>(03)</p>
                </a>
              </li>
              <li>
                <a href="archive.html" class="d-flex justify-content-between">
                  <p>Software</p>
                  <p>(09)</p>
                </a>
              </li>
              <li>
                <a href="archive.html" class="d-flex justify-content-between">
                  <p>Lifestyle</p>
                  <p>(12)</p>
                </a>
              </li>
              <li>
                <a href="archive.html" class="d-flex justify-content-between">
                  <p>Shopping</p>
                  <p>(02)</p>
                </a>
              </li>
              <li>
                <a href="archive.html" class="d-flex justify-content-between">
                  <p>Food</p>
                  <p>(10)</p>
                </a>
              </li>
            </ul>
          </div>

          <div class="single-sidebar-widget popular-post-widget">
            <h4 class="single-sidebar-widget__title">Popular Post</h4>
            <div class="popular-post-list">
              <div class="single-post-list">
                <div class="thumb">
                  <img class="card-img rounded-0" src="<? echo get_template_directory_uri() ?>/img/blog/thumb/thumb1.png" alt="">
                  <ul class="thumb-info">
                    <li><a href="#">Adam Colinge</a></li>
                    <li><a href="#">Dec 15</a></li>
                  </ul>
                </div>
                <div class="details mt-20">
                  <a href="blog-single.html">
                    <h6>Accused of assaulting flight attendant miktake alaways</h6>
                  </a>
                </div>
              </div>
              <div class="single-post-list">
                <div class="thumb">
                  <img class="card-img rounded-0" src="<? echo get_template_directory_uri() ?>/img/blog/thumb/thumb2.png" alt="">
                  <ul class="thumb-info">
                    <li><a href="#">Adam Colinge</a></li>
                    <li><a href="#">Dec 15</a></li>
                  </ul>
                </div>
                <div class="details mt-20">
                  <a href="blog-single.html">
                    <h6>Tennessee outback steakhouse the
                      worker diagnosed</h6>
                  </a>
                </div>
              </div>
              <div class="single-post-list">
                <div class="thumb">
                  <img class="card-img rounded-0" src="<? echo get_template_directory_uri() ?>/img/blog/thumb/thumb3.png" alt="">
                  <ul class="thumb-info">
                    <li><a href="#">Adam Colinge</a></li>
                    <li><a href="#">Dec 15</a></li>
                  </ul>
                </div>
                <div class="details mt-20">
                  <a href="blog-single.html">
                    <h6>Tennessee outback steakhouse the
                      worker diagnosed</h6>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="single-sidebar-widget tag_cloud_widget">
            <h4 class="single-sidebar-widget__title">Tags</h4>
            <ul class="list">
              <li>
                <a href="#">project</a>
              </li>
              <li>
                <a href="#">love</a>
              </li>
              <li>
                <a href="#">technology</a>
              </li>
              <li>
                <a href="#">travel</a>
              </li>
              <li>
                <a href="#">software</a>
              </li>
              <li>
                <a href="#">life style</a>
              </li>
              <li>
                <a href="#">design</a>
              </li>
              <li>
                <a href="#">illustration</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Blog Post Siddebar -->
  </div>
</section>
<!--================ End Blog Post Area =================-->
</main>

<?php get_footer(null, ['has_slider' => true]) ?>