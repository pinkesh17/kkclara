@extends('users.layouts.app')

@section('title', 'Kochaisa Kurmi Samaj - Preserving Culture, Uniting Community')
@section('description', 'Join Kochaisa Kurmi Samaj - a vibrant community dedicated to preserving Kurmi traditions, organizing cultural events, and supporting members. Explore membership benefits, upcoming events, and our rich heritage.')
@section('canonical', URL::current())




@section('content')

    <section class="job-categories">

      <div class="auto-container">
        <div class="sec-title text-center">
          <h2>Popular Job Categories</h2>
          <div class="text">2020 jobs live - 293 added today.</div>

          @guest
      <div class="btn-box">

        @if (Route::has('login'))
            <a href="{{url('login')}}" class="theme-btn btn-style-three">Login</a>
        @endif

        @if (Route::has('register'))
            <a href="{{url('register')}}" class="theme-btn btn-style-one">Register</a>
        @endif
      </div>
  @else



      <p>{{ Auth::user()->username }}</p>
      <p>ds</p>
      <p>{{ Auth::user()->id }}</p>
      <p>{{ Auth::user()->phone }}</p>

      <p>{{ Auth::user()->steps }}</p>
      <p>{{ Auth::user()->role }}</p>
      <p>{{ Auth::user()->status }}</p>
      <p>{{ Auth::user()->password }}</p>

  @endguest


        </div>

        <div class="row wow fadeInUp">
          <!-- Category Block -->
          <div class="category-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="icon flaticon-money-1"></span>
                <h4><a href="#">Accounting / Finance</a></h4>
                <p>(2 open positions)</p>
              </div>
            </div>
          </div>

          <!-- Category Block -->
          <div class="category-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="icon flaticon-promotion"></span>
                <h4><a href="#">Marketing</a></h4>
                <p>86 open positions)</p>
              </div>
            </div>
          </div>

          <!-- Category Block -->
          <div class="category-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="icon flaticon-vector"></span>
                <h4><a href="#">Design</a></h4>
                <p>43 open positions)</p>
              </div>
            </div>
          </div>

          <!-- Category Block -->
          <div class="category-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="icon flaticon-web-programming"></span>
                <h4><a href="#">Development</a></h4>
                <p>(12 open positions)</p>
              </div>
            </div>
          </div>

          <!-- Category Block -->
          <div class="category-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="icon flaticon-headhunting"></span>
                <h4><a href="#">Human Resource</a></h4>
                <p>55 open positions)</p>
              </div>
            </div>
          </div>

          <!-- Category Block -->
          <div class="category-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="icon flaticon-rocket-ship"></span>
                <h4><a href="#">Project Management</a></h4>
                <p>(2 open positions)</p>
              </div>
            </div>
          </div>

          <!-- Category Block -->
          <div class="category-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="icon flaticon-support-1"></span>
                <h4><a href="#">Customer Service</a></h4>
                <p>(2 open positions)</p>
              </div>
            </div>
          </div>

          <!-- Category Block -->
          <div class="category-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="icon flaticon-first-aid-kit-1"></span>
                <h4><a href="#">Health and Care</a></h4>
                <p>(25 open positions)</p>
              </div>
            </div>
          </div>

          <!-- Category Block -->
          <div class="category-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="icon flaticon-car"></span>
                <h4><a href="#">Automotive Jobs</a></h4>
                <p>92 open positions</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End Job Categories -->

    <!-- Job Section -->
    <section class="job-section">
      <div class="auto-container">
        <div class="sec-title text-center">
          <h2>Featured Jobs</h2>
          <div class="text">Know your worth and find the job that qualify your life</div>
        </div>

        <div class="row wow fadeInUp">
          <!-- Job Block -->
          <div class="job-block col-lg-6 col-md-12 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="company-logo"><img src="images/resource/company-logo/1-1.png" alt=""></span>
                <h4><a href="#">Software Engineer (Android), Libraries</a></h4>
                <ul class="job-info">
                  <li><span class="icon flaticon-briefcase"></span> Segment</li>
                  <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                  <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                  <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                </ul>
                <ul class="job-other-info">
                  <li class="time">Full Time</li>
                  <li class="privacy">Private</li>
                  <li class="required">Urgent</li>
                </ul>
                <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
              </div>
            </div>
          </div>

          <!-- Job Block -->
          <div class="job-block col-lg-6 col-md-12 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="company-logo"><img src="images/resource/company-logo/1-2.png" alt=""></span>
                <h4><a href="#">Recruiting Coordinator</a></h4>
                <ul class="job-info">
                  <li><span class="icon flaticon-briefcase"></span> Segment</li>
                  <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                  <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                  <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                </ul>
                <ul class="job-other-info">
                  <li class="time">Full Time</li>
                  <li class="privacy">Private</li>
                  <li class="required">Urgent</li>
                </ul>
                <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
              </div>
            </div>
          </div>

          <!-- Job Block -->
          <div class="job-block col-lg-6 col-md-12 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="company-logo"><img src="images/resource/company-logo/1-3.png" alt=""></span>
                <h4><a href="#">Product Manager, Studio</a></h4>
                <ul class="job-info">
                  <li><span class="icon flaticon-briefcase"></span> Segment</li>
                  <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                  <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                  <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                </ul>
                <ul class="job-other-info">
                  <li class="time">Full Time</li>
                  <li class="privacy">Private</li>
                  <li class="required">Urgent</li>
                </ul>
                <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
              </div>
            </div>
          </div>

          <!-- Job Block -->
          <div class="job-block col-lg-6 col-md-12 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="company-logo"><img src="images/resource/company-logo/1-4.png" alt=""></span>
                <h4><a href="#">Senior Product Designer</a></h4>
                <ul class="job-info">
                  <li><span class="icon flaticon-briefcase"></span> Segment</li>
                  <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                  <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                  <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                </ul>
                <ul class="job-other-info">
                  <li class="time">Full Time</li>
                  <li class="privacy">Private</li>
                  <li class="required">Urgent</li>
                </ul>
                <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
              </div>
            </div>
          </div>

          <!-- Job Block -->
          <div class="job-block col-lg-6 col-md-12 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="company-logo"><img src="images/resource/company-logo/1-5.png" alt=""></span>
                <h4><a href="#">Senior Full Stack Engineer, Creator Success</a></h4>
                <ul class="job-info">
                  <li><span class="icon flaticon-briefcase"></span> Segment</li>
                  <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                  <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                  <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                </ul>
                <ul class="job-other-info">
                  <li class="time">Full Time</li>
                  <li class="privacy">Private</li>
                  <li class="required">Urgent</li>
                </ul>
                <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
              </div>
            </div>
          </div>

          <!-- Job Block -->
          <div class="job-block col-lg-6 col-md-12 col-sm-12">
            <div class="inner-box">
              <div class="content">
                <span class="company-logo"><img src="images/resource/company-logo/1-6.png" alt=""></span>
                <h4><a href="#">Software Engineer (Android), Libraries</a></h4>
                <ul class="job-info">
                  <li><span class="icon flaticon-briefcase"></span> Segment</li>
                  <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                  <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                  <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                </ul>
                <ul class="job-other-info">
                  <li class="time">Full Time</li>
                  <li class="privacy">Private</li>
                  <li class="required">Urgent</li>
                </ul>
                <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
              </div>
            </div>
          </div>
        </div>

        <div class="btn-box">
          <a href="#" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Load More Listing</span></a>
        </div>
      </div>
    </section>
    <!-- End Job Section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
      <div class="container-fluid">
        <!-- Sec Title -->
        <div class="sec-title text-center">
          <h2>Testimonials From Our Customers</h2>
          <div class="text">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor</div>
        </div>

        <div class="carousel-outer wow fadeInUp">

          <!-- Testimonial Carousel -->
          <div class="testimonial-carousel owl-carousel owl-theme">

            <!--Testimonial Block -->
            <div class="testimonial-block">
              <div class="inner-box">
                <h4 class="title">Good theme</h4>
                <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite… The Mitech team works really hard to ensure high level of quality</div>
                <div class="info-box">
                  <div class="thumb"><img src="images/resource/testi-thumb-1.png" alt=""></div>
                  <h4 class="name">Nicole Wells</h4>
                  <span class="designation">Web Developer</span>
                </div>
              </div>
            </div>

            <!--Testimonial Block -->
            <div class="testimonial-block">
              <div class="inner-box">
                <h4 class="title">Great quality!</h4>
                <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite… The Mitech team works really hard to ensure high level of quality</div>
                <div class="info-box">
                  <div class="thumb"><img src="images/resource/testi-thumb-2.png" alt=""></div>
                  <h4 class="name">Gabriel Nolan</h4>
                  <span class="designation">Consultant</span>
                </div>
              </div>
            </div>

            <!--Testimonial Block -->
            <div class="testimonial-block">
              <div class="inner-box">
                <h4 class="title">Awesome Design </h4>
                <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite… The Mitech team works really hard to ensure high level of quality</div>
                <div class="info-box">
                  <div class="thumb"><img src="images/resource/testi-thumb-3.png" alt=""></div>
                  <h4 class="name">Ashley Jenkins</h4>
                  <span class="designation">Designer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Testimonial Section -->

    <!--Clients Section-->
    <section class="clients-section">
      <div class="sponsors-outer wow fadeInUp">
        <!--Sponsors Carousel-->
        <ul class="sponsors-carousel owl-carousel owl-theme">
          <li class="slide-item">
            <figure class="image-box"><a href="#"><img src="images/clients/1-1.png" alt=""></a></figure>
          </li>
          <li class="slide-item">
            <figure class="image-box"><a href="#"><img src="images/clients/1-2.png" alt=""></a></figure>
          </li>
          <li class="slide-item">
            <figure class="image-box"><a href="#"><img src="images/clients/1-3.png" alt=""></a></figure>
          </li>
          <li class="slide-item">
            <figure class="image-box"><a href="#"><img src="images/clients/1-4.png" alt=""></a></figure>
          </li>
          <li class="slide-item">
            <figure class="image-box"><a href="#"><img src="images/clients/1-5.png" alt=""></a></figure>
          </li>
          <li class="slide-item">
            <figure class="image-box"><a href="#"><img src="images/clients/1-6.png" alt=""></a></figure>
          </li>
          <li class="slide-item">
            <figure class="image-box"><a href="#"><img src="images/clients/1-7.png" alt=""></a></figure>
          </li>
        </ul>
      </div>
    </section>
    <!-- End Clients Section-->

    <!-- About Section -->
    <section class="about-section">
      <div class="auto-container">
        <div class="row">
          <!-- Content Column -->
          <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
            <div class="inner-column wow fadeInUp">
              <div class="sec-title">
                <h2>Millions of Jobs. Find the one that suits you.</h2>
                <div class="text">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 600,000 companies worldwide.</div>
              </div>
              <ul class="list-style-one">
                <li>Bring to the table win-win survival</li>
                <li>Capitalize on low hanging fruit to identify</li>
                <li>But I must explain to you how all this</li>
              </ul>
              <a href="#" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Get Started</span></a>
            </div>
          </div>

          <!-- Image Column -->
          <div class="image-column col-lg-6 col-md-12 col-sm-12">
            <figure class="image wow fadeInLeft"><img src="images/resource/image-2.jpg" alt=""></figure>

            <!-- Count Employers -->
            <div class="count-employers wow fadeInUp">
              <div class="check-box"><span class="flaticon-tick"></span></div>
              <span class="title">300k+ Employers</span>
              <figure class="image"><img src="images/resource/multi-logo.png" alt=""></figure>
            </div>
          </div>
        </div>


        <!-- Fun Fact Section -->
        <div class="fun-fact-section">
          <div class="row">
            <!--Column-->
            <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
              <div class="count-box"><span class="count-text" data-speed="3000" data-stop="4">0</span>M</div>
              <h4 class="counter-title">4 million daily active users</h4>
            </div>

            <!--Column-->
            <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
              <div class="count-box"><span class="count-text" data-speed="3000" data-stop="12">0</span>k</div>
              <h4 class="counter-title">Over 12k open job positions</h4>
            </div>

            <!--Column-->
            <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
              <div class="count-box"><span class="count-text" data-speed="3000" data-stop="20">0</span>M</div>
              <h4 class="counter-title">Over 20 million stories shared</h4>
            </div>
          </div>
        </div>
        <!-- Fun Fact Section -->
      </div>
    </section>
    <!-- End About Section -->

    <!-- News Section -->
    <section class="news-section">
      <div class="auto-container">
        <div class="sec-title text-center">
          <h2>Recent News Articles</h2>
          <div class="text">Fresh job related news content posted each day.</div>
        </div>

        <div class="row wow fadeInUp">
          <!-- News Block -->
          <div class="news-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image"><img src="images/resource/news-1.jpg" alt="" /></figure>
              </div>
              <div class="lower-content">
                <ul class="post-meta">
                  <li><a href="#">August 31, 2021</a></li>
                  <li><a href="#">12 Comment</a></li>
                </ul>
                <h3><a href="blog-single.html">Attract Sales And Profits</a></h3>
                <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>

          <!-- News Block -->
          <div class="news-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image"><img src="images/resource/news-2.jpg" alt="" /></figure>
              </div>
              <div class="lower-content">
                <ul class="post-meta">
                  <li><a href="#">August 31, 2021</a></li>
                  <li><a href="#">12 Comment</a></li>
                </ul>
                <h3><a href="blog-single.html">5 Tips For Your Job Interviews</a></h3>
                <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>

          <!-- News Block -->
          <div class="news-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image"><img src="images/resource/news-3.jpg" alt="" /></figure>
              </div>
              <div class="lower-content">
                <ul class="post-meta">
                  <li><a href="#">August 31, 2021</a></li>
                  <li><a href="#">12 Comment</a></li>
                </ul>
                <h3><a href="blog-single.html">An Overworked Newspaper Editor</a></h3>
                <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End News Section -->

    <!-- App Section -->
    <section class="app-section">
      <div class="auto-container">
        <div class="row">
          <!-- Image Column -->
          <div class="image-column col-lg-6 col-md-12 col-sm-12">
            <div class="bg-shape"></div>
            <figure class="image wow fadeInLeft"><img src="images/resource/mobile-app.png" alt=""></figure>
          </div>

          <div class="content-column col-lg-6 col-md-12 col-sm-12">
            <div class="inner-column wow fadeInRight">
              <div class="sec-title">
                <span class="sub-title">DOWNLOAD & ENJOY</span>
                <h2>Get the Superio Job<br> Search App</h2>
                <div class="text">Search through millions of jobs and find the right fit. Simply<br> swipe right to apply.</div>
              </div>
              <div class="download-btn">
                <a href="#"><img src="images/icons/apple.png" alt=""></a>
                <a href="#"><img src="images/icons/google.png" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End App Section -->

    <!-- Call To Action -->
    <section class="call-to-action">
      <div class="auto-container">
        <div class="outer-box wow fadeInUp">
          <div class="content-column">
            <div class="sec-title">
              <h2>Recruiting?</h2>
              <div class="text">Advertise your jobs to millions of monthly users and search 15.8 million<br> CVs in our database.</div>
              <a href="#" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Start Recruiting Now</span></a>
            </div>
          </div>

          <div class="image-column" style="background-image: url(images/resource/image-1.png);">
            <figure class="image"><img src="images/resource/image-1.png" alt=""></figure>
          </div>
        </div>
      </div>
    </section>
    <!-- End Call To Action -->

   
@endsection



