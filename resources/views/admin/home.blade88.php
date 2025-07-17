@extends('layouts.users.main')

@section('title', 'Kochaisa Kurmi Samaj - Preserving Culture, Uniting Community')
@section('description', 'Join Kochaisa Kurmi Samaj - a vibrant community dedicated to preserving Kurmi traditions, organizing cultural events, and supporting members. Explore membership benefits, upcoming events, and our rich heritage.')
@section('canonical', URL::current())




@section('layoutContent')

<section class="pt0 pb40-md">
  <div class="cta-banner bgc-light-yellow mx-auto maxw1700 pt110 pb80 pb30-md bdrs12 position-relative">
    <div class="container">
      <div class="row align-items-start align-items-xl-center">
        <div class="col-md-6 col-lg-7 col-xl-6">
          <div class="position-relative mb35 mb0-sm wow fadeInRight" data-wow-delay="300ms">
            <div class="freelancer-widget d-none d-lg-block">
              <h5 class="title mb20"><span class="text-thm">2000+</span> Community Members</h5>
              <div class="thumb d-flex align-items-center mb20">
                <div class="flex-shrink-0">
                  <img class="wa" src="{{asset('assets/images/team/ea-1.png')}}" alt="">
                </div>
                <div class="flex-grow-1 ml20">
                  <h6 class="title mb-0">Marvin McKinney</h6>
                  <p class="fz14 mb-0">Designer</p>
                </div>
              </div>
              <div class="thumb d-flex align-items-center mb20">
                <div class="flex-shrink-0">
                  <img class="wa" src="{{asset('assets/images/team/ea-2.png')}}" alt="">
                </div>
                <div class="flex-grow-1 ml20">
                  <h6 class="title mb-0">Ralph Edwards</h6>
                  <p class="fz14 mb-0">Designer</p>
                </div>
              </div>
              <div class="thumb d-flex align-items-center mb20">
                <div class="flex-shrink-0">
                  <img class="wa" src="{{asset('assets/images/team/ea-3.png')}}" alt="">
                </div>
                <div class="flex-grow-1 ml20">
                  <h6 class="title mb-0">Annette Black</h6>
                  <p class="fz14 mb-0">Designer</p>
                </div>
              </div>
              <div class="thumb d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img class="wa" src="{{asset('assets/images/team/ea-4.png')}}" alt="">
                </div>
                <div class="flex-grow-1 ml20">
                  <h6 class="title mb-0">Jane Cooper</h6>
                  <p class="fz14 mb-0">Designer</p>
                </div>
              </div>
            </div>
            <div class="freelancer-style1 about-page-style text-center d-none d-lg-block">
              <div class="thumb w90 mb25 mx-auto position-relative rounded-circle"><img class="rounded-circle mx-auto" src="{{asset('assets/images/team/fl-2.png')}}" alt=""><span class="online"></span></div>
              <div class="details">
                <h5 class="title mb-1">Kristin Watson</h5>
                <p class="mb-0">Dog Trainer</p>
                <div class="review"><p><i class="fas fa-star fz10 review-color pr10"></i><span class="dark-color">4.9</span> (595 reviews)</p></div>
                <div class="skill-tags d-flex align-items-center justify-content-center">
                  <span class="tag">Figma</span>
                  <span class="tag mx10">Sketch</span>
                  <span class="tag">HTML5</span>
                </div>
                <hr>
                <div class="fl-meta d-flex align-items-center justify-content-between">
                  <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">London</span></a>
                  <a class="meta fw500 text-start">Rate<br><span class="fz14 fw400">$90 / hr</span></a>
                  <a class="meta fw500 text-start">Job Success<br><span class="fz14 fw400">%98</span></a>
                </div>
              </div>
            </div>
            <img class="d-block d-lg-none w-100" src="{{asset('assets/images/about/verified-freelancer.png')}}" alt="">
            <div class="imgbox-about-page position-relative d-none d-xl-block">
              <img class="img-1 spin-right" src="{{asset('assets/images/about/element-1.png')}}" alt="">
              <img class="img-2 bounce-x" src="{{asset('assets/images/about/element-2.png')}}" alt="">
              <img class="img-3 bounce-y" src="{{asset('assets/images/about/element-3.png')}}" alt="">
              <img class="img-4 bounce-y" src="{{asset('assets/images/about/element-4.png')}}" alt="">
              <img class="img-5 spin-right" src="{{asset('assets/images/about/element-5.png')}}" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 col-xl-5 offset-xl-1">
          <div class="about-box-1 pe-4 mt100 mt0-lg mb30-lg wow fadeInLeft" data-wow-delay="300ms">
            <h2 class="title mb10">Kochaisa Kurmi:<br> Building Futures with Education and Experience</h2>
            <p class="text mb25 mb30-md">Experienced and professional members of the Kochaisa Kurmi community, blending education, values, and dedication.</p>
            <div class="list-style3 mb40 mb30-md">
              <ul>
                <li><i class="far fa-check text-white bgc-review-color2"></i>Agricultural Roots & Land Ownership</li>
                <li><i class="far fa-check text-white bgc-review-color2"></i>Strong Community Organization & Identity</li>
                <li><i class="far fa-check text-white bgc-review-color2"></i>Contributors to Social Reform & Education</li>
              </ul>
            </div>
            <a href="page-service-single.html" class="ud-btn btn-thm2">See More<i class="fal fa-arrow-right-long"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



    <!-- Browse talent by category -->
    <section class="pb40-md pb90">
      <div class="container">
        <div class="row align-items-center wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-9">
            <div class="main-title2">
              <h2 class="title">Browse talent by category</h2>
              <p class="paragraph">Get some Inspirations from 1800+ skills</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-start text-lg-end mb-4 mb-lg-2">
              <a class="ud-btn2" href="page-service-single.html">All Categories<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
        <div class="row d-none d-lg-flex wow fadeInUp">
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1">
              <div class="icon"><span class="flaticon-developer"></span></div>
              <div class="details mt20">
                <p class="text mb5">1.853 skills</p>
                <h4 class="title">Development & IT</h4>
                <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1">
              <div class="icon"><span class="flaticon-web-design-1"></span></div>
              <div class="details mt20">
                <p class="text mb5">1.853 skills</p>
                <h4 class="title">Design & Creative</h4>
                <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1">
              <div class="icon"><span class="flaticon-digital-marketing"></span></div>
              <div class="details mt20">
                <p class="text mb5">1.853 skills</p>
                <h4 class="title">Digital Marketing</h4>
                <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1">
              <div class="icon"><span class="flaticon-translator"></span></div>
              <div class="details mt20">
                <p class="text mb5">1.853 skills</p>
                <h4 class="title">Writing & Translation</h4>
                <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1">
              <div class="icon"><span class="flaticon-microphone"></span></div>
              <div class="details mt20">
                <p class="text mb5">1.853 skills</p>
                <h4 class="title">Music & Audio</h4>
                <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1">
              <div class="icon"><span class="flaticon-video-file"></span></div>
              <div class="details mt20">
                <p class="text mb5">1.853 skills</p>
                <h4 class="title">Video & Animation</h4>
                <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1">
              <div class="icon"><span class="flaticon-ruler"></span></div>
              <div class="details mt20">
                <p class="text mb5">1.853 skills</p>
                <h4 class="title">Engineering & Architecture</h4>
                <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1">
              <div class="icon"><span class="flaticon-goal"></span></div>
              <div class="details mt20">
                <p class="text mb5">1.853 skills</p>
                <h4 class="title">Finance & Accounting</h4>
                <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row d-block d-lg-none">
          <div class="col-lg-12">
            <div class="slider-outer-dib navi_pagi_top_right slider-5-grid owl-carousel owl-theme wow fadeInUp">
              <div class="item">
                <div class="iconbox-style1">
                  <div class="icon"><span class="flaticon-developer"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h4 class="title">Development & IT</h4>
                    <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1">
                  <div class="icon"><span class="flaticon-web-design-1"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h4 class="title">Design & Creative</h4>
                    <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1">
                  <div class="icon"><span class="flaticon-digital-marketing"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h4 class="title">Digital Marketing</h4>
                    <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1">
                  <div class="icon"><span class="flaticon-translator"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h4 class="title">Writing & Translation</h4>
                    <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1">
                  <div class="icon"><span class="flaticon-microphone"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h4 class="title">Music & Audio</h4>
                    <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1">
                  <div class="icon"><span class="flaticon-video-file"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h4 class="title">Video & Animation</h4>
                    <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1">
                  <div class="icon"><span class="flaticon-ruler"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h4 class="title">Engineering & Architecture</h4>
                    <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1">
                  <div class="icon"><span class="flaticon-goal"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h4 class="title">Finance & Accounting</h4>
                    <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Trending Services -->
    <section class="pb90 pb30-md bgc-thm3">
      <div class="container">
        <div class="row align-items-center wow fadeInUp">
          <div class="col-lg-9">
            <div class="main-title">
              <h2 class="title">Trending Services</h2>
              <p class="paragraph">Most viewed and all-time top-selling services</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-start text-lg-end mb-4 mb-lg-2">
              <a class="ud-btn2" href="page-service-single.html">All Categories<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="slider-outer-dib vam_nav_style dots_none slider-4-grid2 owl-carousel owl-theme wow fadeInUp" data-wow-delay="300ms">
              <div class="item">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="{{asset('assets/images/listings/g-1.jpg')}}" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                    <h5 class="list-title"><a href="page-services-single.html">I will design modern websites in figma or adobe xd</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle wa" src="{{asset('assets/images/team/fl-s-1.png')}}" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="{{asset('assets/images/listings/g-2.jpg')}}" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Art & Illustration</p>
                    <h5 class="list-title"><a href="page-services-single.html">I will create modern flat design illustration</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle wa" src="{{asset('assets/images/team/fl-s-2.png')}}" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Ali Tufan</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="{{asset('assets/images/listings/g-3.jpg')}}" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Design & Creative</p>
                    <h5 class="list-title line-clamp2"><a href="page-services-single.html">I will build a fully responsive design in HTML,CSS, bootstrap, and javascript</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle" src="{{asset('assets/images/team/fl-s-3.png')}}" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="{{asset('assets/images/listings/g-4.jpg')}}" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                    <h5 class="list-title line-clamp2"><a href="page-services-single.html">I will do mobile app development for ios and android</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle" src="{{asset('assets/images/team/fl-s-4.png')}}" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="{{asset('assets/images/listings/g-5.jpg')}}" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                    <h5 class="list-title"><a href="page-services-single.html">I will design modern websites in figma or adobe xd</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle" src="{{asset('assets/images/team/fl-s-1.png')}}" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="{{asset('assets/images/listings/g-6.jpg')}}" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                    <h5 class="list-title"><a href="page-services-single.html">I will design modern websites in figma or adobe xd</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle" src="{{asset('assets/images/team/fl-s-2.png')}}" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="{{asset('assets/images/listings/g-7.jpg')}}" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Design & Creative</p>
                    <h5 class="list-title line-clamp2"><a href="page-services-single.html">I will build a fully responsive design in HTML,CSS, bootstrap, and javascript</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle" src="{{asset('assets/images/team/fl-s-3.png')}}" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Need something --> 
    <section class="our-features pb90">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-title text-center">
              <h2>Need something done?</h2>
              <p class="text">Most viewed and all-time top-selling services</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <div class="iconbox-style1 border-less p-0">
              <div class="icon before-none"><span class="flaticon-cv"></span></div>
              <div class="details">
                <h4 class="title mt10 mb-3">Post a job</h4>
                <p class="text">It’s free and easy to post a job. Simply fill <br class="d-none d-xxl-block"> in a title, description.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="iconbox-style1 border-less p-0">
              <div class="icon before-none"><span class="flaticon-web-design"></span></div>
              <div class="details">
                <h4 class="title mt10 mb-3">Choose freelancers</h4>
                <p class="text">It’s free and easy to post a job. Simply fill <br class="d-none d-xxl-block"> in a title, description.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="iconbox-style1 border-less p-0">
              <div class="icon before-none"><span class="flaticon-secure"></span></div>
              <div class="details">
                <h4 class="title mt10 mb-3">Pay safely</h4>
                <p class="text">It’s free and easy to post a job. Simply fill <br class="d-none d-xxl-block"> in a title, description.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="iconbox-style1 border-less p-0">
              <div class="icon before-none"><span class="flaticon-customer-service"></span></div>
              <div class="details">
                <h4 class="title mt10 mb-3">We’re here to help</h4>
                <p class="text">It’s free and easy to post a job. Simply fill <br class="d-none d-xxl-block"> in a title, description.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Banner -->
    <section class="p-0">
      <div class="cta-banner3 bgc-light-yellow mx-auto maxw1700 pt120 pt60-lg pb90 pb60-lg position-relative overflow-hidden">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 wow fadeInRight" data-wow-delay="300ms">
              <div class="mb30">
                <div class="main-title">
                  <h2 class="title">A whole world of freelance <br class="d-none d-xl-block"> talent at your fingertips</h2>
                </div>
              </div>
              <div class="why-chose-list">
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-badge"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h4 class="mb-1">Proof of quality</h4>
                    <p class="text mb-0 fz15">Check any pro’s work samples, client reviews, and identity <br class="d-none d-lg-block"> verification.</p>
                  </div>
                </div>
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-money"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h4 class="mb-1">No cost until you hire</h4>
                    <p class="text mb-0 fz15">Interview potential fits for your job, negotiate rates, and only pay <br class="d-none d-lg-block"> for work you approve.</p>
                  </div>
                </div>
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-security"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h4 class="mb-1">Safe and secure</h4>
                    <p class="text mb-0 fz15">Focus on your work knowing we help protect your data and privacy. We’re here with 24/7 support if you need it.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <img class="cta-banner3-img wow fadeInLeft" src="{{asset('assets/images/about/about-5.jpg')}}" alt="" data-wow-delay="300ms">
      </div>
    </section>

    <!-- Funfact -->
    <section class="pb0 pt60">
      <div class="container maxw1600 bdrb1 pb60">
        <div class="row justify-content-center wow fadeInUp" data-wow-delay="300ms">
          <div class="col-6 col-md-3">
            <div class="funfact_one mb20-sm text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">834</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Total Freelancer</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="funfact_one mb20-sm text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">732</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Positive Review</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="funfact_one mb20-sm text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">90</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Order recieved</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="funfact_one mb20-sm text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">236</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Projects Completed</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Testimonials -->
    <section class="our-testimonial">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="300ms">
            <div class="main-title text-center">
              <h2>Testimonials</h2>
              <p class="paragraph">Interdum et malesuada fames ac ante ipsum</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 m-auto wow fadeInUp" data-wow-delay="500ms">
            <div class="testimonial-style2">
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade" id="pills-1st" role="tabpanel" aria-labelledby="pills-1st-tab">
                  <div class="testi-content text-md-center">
                    <span class="icon fas fa-quote-left"></span>
                    <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                    <h6 class="name">Ali Tufan</h6>
                    <p class="design">Product Manager, Apple Inc</p>
                  </div>
                </div>
                <div class="tab-pane fade show active" id="pills-2nd" role="tabpanel" aria-labelledby="pills-2nd-tab">
                  <div class="testi-content text-md-center">
                    <span class="icon fas fa-quote-left"></span>
                    <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                    <h6 class="name">Ali Tufan</h6>
                    <p class="design">Product Manager, Apple Inc</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-3rd" role="tabpanel" aria-labelledby="pills-3rd-tab">
                  <div class="testi-content text-md-center">
                    <span class="icon fas fa-quote-left"></span>
                    <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                    <h6 class="name">Ali Tufan</h6>
                    <p class="design">Product Manager, Apple Inc</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-4th" role="tabpanel" aria-labelledby="pills-4th-tab">
                  <div class="testi-content text-md-center">
                    <span class="icon fas fa-quote-left"></span>
                    <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                    <h6 class="name">Ali Tufan</h6>
                    <p class="design">Product Manager, Apple Inc</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-5th" role="tabpanel" aria-labelledby="pills-5th-tab">
                  <div class="testi-content text-md-center">
                    <span class="icon fas fa-quote-left"></span>
                    <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                    <h6 class="name">Ali Tufan</h6>
                    <p class="design">Product Manager, Apple Inc</p>
                  </div>
                </div>
              </div>
              <div class="tab-list position-relative">
                <ul class="nav nav-pills justify-content-md-center" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link ps-0" id="pills-1st-tab" data-bs-toggle="pill" data-bs-target="#pills-1st" type="button" role="tab" aria-controls="pills-1st" aria-selected="true"><img src="{{asset('assets/images/testimonials/testi-1.png')}}" alt=""></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-2nd-tab" data-bs-toggle="pill" data-bs-target="#pills-2nd" type="button" role="tab" aria-controls="pills-2nd" aria-selected="false"><img src="{{asset('assets/images/testimonials/testi-2.png')}}" alt=""></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-3rd-tab" data-bs-toggle="pill" data-bs-target="#pills-3rd" type="button" role="tab" aria-controls="pills-3rd" aria-selected="false"><img src="{{asset('assets/images/testimonials/testi-3.png')}}" alt=""></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-4th-tab" data-bs-toggle="pill" data-bs-target="#pills-4th" type="button" role="tab" aria-controls="pills-4th" aria-selected="false"><img src="{{asset('assets/images/testimonials/testi-4.png')}}" alt=""></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link pe-0" id="pills-5th-tab" data-bs-toggle="pill" data-bs-target="#pills-5th" type="button" role="tab" aria-controls="pills-5th" aria-selected="false"><img src="{{asset('assets/images/testimonials/testi-5.png')}}" alt=""></button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section Area -->
    <section class="our-about bgc-thm2">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6">
            <div class="position-relative mb30-lg">
              <div class="iconbox-small1 at-home1 d-none d-md-block wow fadeInRight">
                <span class="icon flaticon-review"></span>
                <div class="details">
                  <h6>4.9/5</h6>
                  <p class="text fz13 mb-0">Clients rate professionals</p>
                </div>
              </div>
              <div class="iconbox-small2 d-none d-md-block wow fadeInLeft">
                <span class="icon flaticon-review"></span>
                <div class="details">
                  <h6>+12M</h6>
                  <p class="text fz13 mb-0">Project Completed</p>
                </div>
              </div>
              <div class="about-img wow fadeInRight" data-wow-delay="300ms">
                <img class="w100" src="{{asset('assets/images/about/about-1.png')}}" alt="">
              </div>
              <div class="imgbox-1 default-box-shadow1 text-center wow fadeInUp">
                <img class="img-1 bounce-y" src="{{asset('assets/images/about/happy-client.png')}}" alt="">
              </div>
            </div>
          </div>
          <div class="col-xl-5 offset-xl-1">
            <div class="position-relative wow fadeInLeft" data-wow-delay="300ms">
              <h2 class="text-white mb35">Join World's Best Marketplace <br class="d-none d-lg-block"> for Workers</h2>
              <p class="text text-white mb35">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
              <div class="list-style2 light-style">
                <ul class="mb30">
                  <li><i class="far fa-check"></i>Connect to freelancers with proven business experience</li>
                  <li><i class="far fa-check"></i>Get matched with the perfect talent by a customer success manager</li>
                  <li><i class="far fa-check"></i>Unmatched quality of remote, hybrid, and flexible jobs</li>
                </ul>
              </div>
              <a href="page-freelancer-v1.html" class="ud-btn btn-thm">Find Talent<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Blog -->
    <section class="pb90 pb20-md">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="00ms">
            <div class="main-title">
              <h2 class="title">Our Blog</h2>
              <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-sm-6 col-xl-3">
            <div class="blog-style1">
              <div class="blog-img"><img class="w-100" src="{{asset('assets/images/blog/blog-1.jpg')}}" alt=""></div>
              <div class="blog-content">
                <a class="date" href="#">December 2, 2022</a>
                <h4 class="title mt-1"><a href="page-blog-single.html">Start an online business and work from home</a></h4>
                <p class="text mb-0">A complete guide to starting a small business online</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="blog-style1">
              <div class="blog-img"><img class="w-100" src="{{asset('assets/images/blog/blog-2.jpg')}}" alt=""></div>
              <div class="blog-content">
                <a class="date" href="#">December 2, 2022</a>
                <h4 class="title mt-1"><a href="page-blog-single.html">Front becomes an official Instagram Marketing Partner</a></h4>
                <p class="text mb-0">A complete guide to starting a small business online</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="blog-style1">
              <div class="blog-img"><img class="w-100" src="{{asset('assets/images/blog/blog-3.jpg')}}" alt=""></div>
              <div class="blog-content">
                <a class="date" href="#">December 2, 2022</a>
                <h4 class="title mt-1"><a href="page-blog-single.html">Engendering a culture of professional development</a></h4>
                <p class="text mb-0">A complete guide to starting a small business online</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="blog-style1">
              <div class="blog-img"><img class="w-100" src="{{asset('assets/images/blog/blog-4.jpg')}}" alt=""></div>
              <div class="blog-content">
                <a class="date" href="#">December 2, 2022</a>
                <h4 class="title mt-1"><a href="page-blog-single.html">Increasing engagement with Instagram</a></h4>
                <p class="text mb-0">A complete guide to starting a small business online</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Partners --> 
    <section class="our-partners pt0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 wow fadeInUp">
            <div class="main-title text-center">
              <h6>Trusted by the world’s best</h6>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30-lg"><img class="wa m-auto" src="{{asset('assets/images/partners/1.png')}}" alt="1.png')}}"></div>
          </div>
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30-lg"><img class="wa m-auto" src="{{asset('assets/images/partners/2.png')}}" alt="2.png')}}"></div>
          </div>
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30-lg"><img class="wa m-auto" src="{{asset('assets/images/partners/3.png')}}" alt="3.png')}}"></div>
          </div>
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30-lg"><img class="wa m-auto" src="{{asset('assets/images/partners/4.png')}}" alt="4.png')}}"></div>
          </div>
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30-lg"><img class="wa m-auto" src="{{asset('assets/images/partners/5.png')}}" alt="5.png')}}"></div>
          </div>
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30-lg"><img class="wa m-auto" src="{{asset('assets/images/partners/6.png')}}" alt="6.png')}}"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our CTA --> 
    <section class="our-cta bgc-thm4 pt90 pb90 pt60-md pb60-md mt100 mt0-lg">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-md-12 col-lg-21 col-xl-12 wow fadeInLeft">
            <div class="cta-style3 text-center">
              <h2 class="cta-title">Be a Proud Member of Your Community</h2>
              <p class="cta-text">Register today and unlock access to trusted networks and opportunities.</p>
              <a href="{{route('register')}}" class="ud-btn btn-thm2">Get Started <i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 col-xl-5 position-relative wow zoomIn">
            {{-- 
            <div class="cta-img">
              <img class="w-100" src="{{asset('assets/images/about/about-3.png')}}" alt="">
            </div>--}}

          </div>
        </div>
      </div>
    </section>

    
    
 

@endsection
