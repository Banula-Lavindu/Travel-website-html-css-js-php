<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ======== Favicon ======= -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <!-- ======== Boxicons ======= -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- ======== Slider Js ======= -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css"
    />

    <!-- ======== StyleSheet ======= -->
    <link rel="stylesheet" href="css/styles.css" />
    <title>Travel Website</title>
  </head>
  <body>
    <!-- Preloader -->
    <div class="loader">
      <img src="./images/preloader.gif" alt="" />
    </div>
    <!-- header -->
    <header class="header" id="header">
      <!-- Navigation -->
      <div class="navigation">
        <nav class="nav d-flex">
          <div class="logo">
            <a href="/">
              <img src="./images/logo.png" />
            </a>
          </div>
          <ul class="nav-list d-flex">
            <li class="nav-item">
              <a href="#header" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="#service" class="nav-link">Service</a>
            </li>
            <li class="nav-item">
              <a href="#trips" class="nav-link">Trips</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link">Contact</a>
            </li>
          </ul>

          <a href="login.html" class="btn sign-up">Sign Up</a>

          <div class="hamburger">
            <i class="bx bx-menu-alt-left"></i>
          </div>
        </nav>
      </div>

      <!-- Hero -->
      <div class="swiper-container slider-1">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="./images/pic-1.jpg" alt="" />
          </div>

          <div class="swiper-slide">
            <img src="./images/pic-5.jpg" alt="hero image" />
          </div>
          <div class="swiper-slide">
            <video muted loop autoplay>
              <source src="./images/video-4.mp4" type="video/mp4" />
              <source src="./images/video-2.webm" type="video/webm" />
            </video>
          </div>
          <div class="swiper-slide">
            <img src="./images/pic-6.jpg" alt="hero image" />
          </div>

          <div class="swiper-slide">
            <video muted loop autoplay>
              <source src="./images/video-3.mp4" type="video/mp4" />
              <source src="./images/video-3.webm" type="video/webm" />
            </video>
          </div>
          <div class="swiper-slide">
            <img src="./images/hero-3.jpg" alt="" />
          </div>

          <div class="swiper-slide">
            <video muted loop autoplay>
              <source src="./images/video-1.mp4" type="video/mp4" />
              <source src="./images/video-1.webm" type="video/webm" />
            </video>
          </div>
        </div>
      </div>

      <div class="content">
        <h1>
          Get Ready for <br />
          Lifetime Journey
        </h1>
        <a href="#" class="btn">Get Started</a>
      </div>

      <div class="arrows d-flex">
        <div class="swiper-prev d-flex">
          <i class="bx bx-chevron-left swiper-icon"></i>
        </div>
        <div class="swiper-next d-flex">
          <i class="bx bx-chevron-right swiper-icon"></i>
        </div>
      </div>
    </header>

    <main class="main">
      <!-- About Section -->
      <section class="section about" id="about">
        <div class="row container">
          <div class="col">
            <div class="title">
              <h1>About Us</h1>
            </div>
            <p>
            It is an adventure you’ve always dreamt of, but haven’t been able to plan and execute properly. Here are some useful pointers on how to plan a trip, that put an end to the cluttered chaos by streamlining your vacations to perfect harmony and pure bliss.
            </p>
            <a href="#" class="btn">Know more</a>
          </div>
          <div class="col">
            <div class="swiper-container slider-2">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="./images/pic-5.jpg" alt="hero image" />
                </div>
                <div class="swiper-slide">
                  <video muted loop autoplay>
                    <source src="./images/video-3.mp4" type="video/mp4" />
                    <source src="./images/video-3.webm" type="video/webm" />
                  </video>
                </div>
                <div class="swiper-slide">
                  <img src="./images/hero-3.jpg" alt="" />
                </div>
              </div>
              <div class="swiper-button-next">
                <i class="bx bx-chevron-right swiper-icon"></i>
              </div>
              <div class="swiper-button-prev">
                <i class="bx bx-chevron-left swiper-icon"></i>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--  Service Section -->
      <section class="section service" id="service">
        <div class="row container">
          <img src="./images/pic-1.jpg" alt="" />
          <div class="col">
            <div class="title">
              <h1>How to Spend a Weekend?</h1>
            </div>
            <p>
            Sri Lanka is the convergence of religion, history and nature, forming this beautiful country that has many secrets waiting for you to discover.

While it is impossible to explore every tourist attraction in Sri Lanka in two weeks, this Sri Lanka two-week itinerary will give you a detailed day-by-day breakdown with suggestion on what to do, where to stay, what to see and more.
            </p>
            <div class="d-flex">
              <h2>15 Days Tour</h2>
              <div class="rating">
                <span><i class="bx bxs-star"></i></span>
                <span><i class="bx bxs-star"></i></span>
                <span><i class="bx bxs-star"></i></span>
                <span><i class="bx bxs-star"></i></span>
                <span><i class="bx bxs-star"></i></span>
              </div>
            </div>
            <div class="d-flex">
              <h3 class="price">Rs7999.99</h3>
              <a href="" class="btn">Book Now</a>
            </div>
          </div>
        </div>
      </section>
      <!-- discount Section -->
      <section class="section discount">
        <div class="overlay">
          <video class="video">
            <source src="./images/hero-2.m4v" type="video/mp4" />
            <source src="./images/hero-2.webm" type="video/webm" />
          </video>
        </div>
        <div class="content">
          <h1>
            Get 15% Off On Tour <br />
            Next Travel
          </h1>
          <a href="#" class="btn">Explore the Tour</a>
          <span class="video-control d-flex"><i class="bx bx-play"></i></span>
        </div>
      </section>

      <!-- Trip Section -->
      <section class="section trip" id="trips">
        <div class="title">
          <h1>
            Plan Your <br />
            Trip With Us
          </h1>
          <p>
            
          </p>
        </div>

        <div class="row container">
          <div class="swiper-container slider-3">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="./images/vert-1.jpg" alt="hero image" />
              </div>
              <div class="swiper-slide">
                <img src="./images/vert-2.jpg" alt="" />
              </div>
              <div class="swiper-slide">
                <img src="./images/vert-3.jpg" alt="" />
              </div>
              <div class="swiper-slide">
                <img src="./images/vert-4.jpg" alt="" />
              </div>
              <div class="swiper-slide">
                <img src="./images/vert-5.jpg" alt="" />
              </div>
              <div class="swiper-slide">
                <img src="./images/vert-6.jpg" alt="" />
              </div>
              <div class="swiper-slide">
                <img src="./images/vert-7.jpg" alt="" />
              </div>
            </div>
          </div>
          <div class="custom-next d-flex">
            <i class="bx bx-chevron-right swiper-icon"></i>
          </div>
          <div class="custom-prev d-flex">
            <i class="bx bx-chevron-left swiper-icon"></i>
          </div>
          <div class="custom-pagination d-flex"></div>
        </div>
        <div class="explore">
          <a href="#" class="btn">Explore All</a>
        </div>
      </section>

      <!-- More Section -->
      <section class="section more">
        <div class="row container">
          <div class="col">
            <div class="title">
              <h1>
                More Places for <br />
                Your Next Travel
              </h1>
              <p>
             </p>
            </div>
            <div class="tours">
              <div class="box">
                <img src="./images/pic-2.jpg" alt="" />
                <h3>Visit to Weligama</h3>
                <h4>Rs6000</h4>
              </div>
              <div class="box">
                <img src="./images/pic-3.jpg" alt="" />
                <h3>Visit to Nilaveli</h3>
                <h4>Rs8000</h4>
              </div>
            </div>
            <a href="#" class="btn">Explore more tours now</a>
          </div>
          <div class="col">
            <img src="./images/pic-4.jpg" alt="" />
          </div>
        </div>
      </section>

      <!-- NewsLetter Section -->
      <section class="section newsletter">
        <div class="row container">
          <div class="col">
            <h2>Subscribe to our Newsletter</h2>
            <p>
            
            </p>
          </div>
          <form class="form">
            <div>
              <input type="email" placeholder="Email" />
              <button>Submit</button>
            </div>
          </form>
        </div>
      </section>

      <!-- Contact Section -->
      <section class="section contact" id="contact">
        <div class="title">
          <h1>Contact Us</h1>
          <p>
            
          </p>
        </div>

        <div class="location container">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4047240.5888966136!2d78.06330497012125!3d7.854883580073662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593cf65a1e9d%3A0xe13da4b400e2d38c!2sSri%20Lanka!5e0!3m2!1sen!2slk!4v1682052339701!5m2!1sen!2slk" 
            width="600"
            height="550"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
          ></iframe>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
      <div class="row container">
        <div class="col">
          <h3>Company</h3>
          <a href="#">Contact Us</a>
          <a href="#">Executive Team</a>
          <a href="#">Contact Us</a>
          <a href="#">Executive Team</a>
          <a href="#">Contact Us</a>
        </div>
        <div class="col">
          <h3>Learning Center</h3>

          <a href="#">Contact Us</a>
          <a href="#">Executive Team</a>
          <a href="#">Contact Us</a>
          <a href="#">Executive Team</a>
          <a href="#">Contact Us</a>
        </div>
        <div class="col">
          <h3>Partner With Us</h3>

          <a href="#">Contact Us</a>
          <a href="#">Executive Team</a>
          <a href="#">Contact Us</a>
          <a href="#">Executive Team</a>
          <a href="#">Contact Us</a>
        </div>
        <div class="col">
          <img src="./images/pic-1.jpg" alt="" />
          <img src="./images/pic-2.jpg" alt="" />
          <img src="./images/pic-3.jpg" alt="" />
          <img src="./images/pic-4.jpg" alt="" />
        </div>
      </div>
    </footer>

    <!-- ======== SwiperJS ======= -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.js"></script>
    <!-- ======== SCROLL REVEAL ======= -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.min.js"></script>
    <!-- ======== SliderJS ======= -->
    <script src="js/slider.js"></script>
    <!-- ======== IndexJS ======= -->
    <script src="js/index.js"></script>
  </body>
</html>
