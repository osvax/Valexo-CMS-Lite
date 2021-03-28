<?php $__env->startSection('content'); ?>
    <!-- Sign In Modal-->
      <div class="modal fade" id="modal-signin" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content border-0">
            <div class="view show" id="modal-signin-view">
              <div class="modal-header border-0 bg-dark px-4">
                <h4 class="modal-title text-light">Sign in</h4>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="btn-close "></button>
              </div>
              <div class="modal-body px-4">
                <p class="fs-ms text-muted">Sign in to your account using email and password provided during registration.</p>
                <form class="needs-validation" novalidate>
                  <div class="mb-3">
                    <div class="input-group"><i class="ai-mail position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                      <input class="form-control rounded" type="email" placeholder="Email" required>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="input-group"><i class="ai-lock position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                      <div class="password-toggle w-100">
                        <input class="form-control" type="password" placeholder="Password" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mb-3 mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="keep-signed">
                      <label class="form-check-label fs-sm" for="keep-signed">Keep me signed in</label>
                    </div><a class="nav-link-style fs-ms" href="password-recovery.html">Forgot password?</a>
                  </div>
                  <button class="btn btn-primary d-block w-100" type="submit">Sign in</button>
                  <p class="fs-sm pt-3 mb-0">Don't have an account? <a href='#' class='fw-medium' data-view='#modal-signup-view'>Sign up</a></p>
                </form>
              </div>
            </div>
            <div class="view" id="modal-signup-view">
              <div class="modal-header border-0 bg-dark px-4">
                <h4 class="modal-title text-light">Sign up</h4>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="btn-close"></button>
              </div>
              <div class="modal-body px-4">
                <p class="fs-ms text-muted">Registration takes less than a minute but gives you full control over your orders.</p>
                <form class="needs-validation" novalidate>
                  <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Full name" required>
                  </div>
                  <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Email" required>
                  </div>
                  <div class="mb-3 password-toggle">
                    <input class="form-control" type="password" placeholder="Password" required>
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                    </label>
                  </div>
                  <div class="mb-3 password-toggle">
                    <input class="form-control" type="password" placeholder="Confirm password" required>
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                    </label>
                  </div>
                  <button class="btn btn-primary d-block w-100" type="submit">Sign up</button>
                  <p class="fs-sm pt-3 mb-0">Already have an account? <a href='#' class='fw-medium' data-view='#modal-signin-view'>Sign in</a></p>
                </form>
              </div>
            </div>
            <div class="modal-body text-center px-4 pt-2 pb-4">
              <hr class="my-0">
              <p class="fs-sm fw-medium text-heading pt-4">Or sign in with</p><a class="btn-social bs-facebook bs-lg mx-1 mb-2" href="#"><i class="ai-facebook"></i></a><a class="btn-social bs-twitter bs-lg mx-1 mb-2" href="#"><i class="ai-twitter"></i></a><a class="btn-social bs-instagram bs-lg mx-1 mb-2" href="#"><i class="ai-instagram"></i></a><a class="btn-social bs-google bs-lg mx-1 mb-2" href="#"><i class="ai-google"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Navbar (Floating light)-->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      <header class="header navbar navbar-expand-lg navbar-dark navbar-floating navbar-sticky" data-scroll-header data-fixed-element>
        <div class="container px-0 px-xl-3">
          <button class="navbar-toggler ms-n2 me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu"><span class="navbar-toggler-icon"></span></button><a class="navbar-brand flex-shrink-0 order-lg-1 mx-auto ms-lg-0 pe-lg-2 me-lg-4" href="index.html"><img class="navbar-floating-logo d-none d-lg-block" src="img/logo/logo-light.png" alt="Around" width="153"><img class="navbar-stuck-logo" src="img/logo/logo-dark.png" alt="Around" width="153"><img class="d-lg-none" src="img/logo/logo-icon.png" alt="Around" width="58"></a>
          <div class="d-flex align-items-center order-lg-3 ms-lg-auto"><a class="nav-link-style fs-sm text-nowrap" href="#modal-signin" data-bs-toggle="modal" data-view="#modal-signin-view"><i class="ai-user fs-xl me-2 align-middle"></i>Sign in</a><a class="btn btn-primary ms-grid-gutter d-none d-lg-inline-block navbar-btn" href="#modal-signin" data-bs-toggle="modal" data-view="#modal-signup-view">Sign up</a><a class="btn btn-primary ms-grid-gutter d-none d-lg-inline-block navbar-stuck-btn" href="#modal-signin" data-bs-toggle="modal" data-view="#modal-signup-view">Sign up</a></div>
          <div class="offcanvas offcanvas-collapse order-lg-2" id="primaryMenu">
            <div class="offcanvas-cap navbar-shadow">
              <h5 class="mt-1 mb-0">Menu</h5>
              <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <!-- Menu-->
              <ul class="navbar-nav">
                <li class="nav-item dropdown dropdown-mega active"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Demos</a>
                  <div class="dropdown-menu"><a class="dropdown-column dropdown-column-img bg-secondary" href="index.html" style="background-image: url(img/demo/menu-banner.jpg);"></a>
                    <div class="dropdown-column"><a class="dropdown-item" href="index.html">Web Template Presentation</a><a class="dropdown-item" href="demo-business-consulting.html">Business Consulting</a><a class="dropdown-item" href="demo-shop-homepage.html">Shop Homepage</a><a class="dropdown-item" href="demo-booking-directory.html">Booking / Directory</a><a class="dropdown-item" href="demo-creative-agency.html">Creative Agency</a><a class="dropdown-item" href="">Web Studio</a><a class="dropdown-item" href="demo-product-software.html">Product Landing - Software</a></div>
                    <div class="dropdown-column"><a class="dropdown-item" href="demo-product-gadget.html">Product Landing - Gadget</a><a class="dropdown-item" href="demo-mobile-app.html">Mobile App Showcase</a><a class="dropdown-item" href="demo-coworking-space.html">Coworking Space</a><a class="dropdown-item" href="demo-event-landing.html">Event Landing</a><a class="dropdown-item" href="demo-marketing-seo.html">Digital Marketing &amp; SEO</a><a class="dropdown-item" href="demo-food-blog.html">Food Blog</a><a class="dropdown-item" href="demo-personal-portfolio.html">Personal Portfolio</a></div>
                  </div>
                </li>
                <li class="nav-item dropdown dropdown-mega"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Templates</a>
                  <div class="dropdown-menu">
                    <div class="dropdown-column mb-2 mb-lg-0">
                      <h5 class="dropdown-header">Blog</h5><a class="dropdown-item" href="blog-grid-rs.html">Grid Right Sidebar</a><a class="dropdown-item" href="blog-grid-ls.html">Grid Left Sidebar</a><a class="dropdown-item" href="blog-grid-ns.html">Grid No Sidebar</a><a class="dropdown-item" href="blog-list-rs.html">List Right Sidebar</a><a class="dropdown-item" href="blog-list-ls.html">List Left Sidebar</a><a class="dropdown-item" href="blog-list-ns.html">List No Sidebar</a><a class="dropdown-item" href="blog-single-rs.html">Single Post Right Sidebar</a><a class="dropdown-item" href="blog-single-ls.html">Single Post Left Sidebar</a><a class="dropdown-item" href="blog-single-ns.html">Single Post No Sidebar</a>
                    </div>
                    <div class="dropdown-column mb-2 mb-lg-0">
                      <h5 class="dropdown-header">Portfolio</h5><a class="dropdown-item" href="portfolio-style-1.html">Grid Style 1</a><a class="dropdown-item" href="portfolio-style-2.html">Grid Style 2</a><a class="dropdown-item" href="portfolio-style-3.html">Grid Style 3</a><a class="dropdown-item" href="portfolio-single-side-gallery-grid.html">Project Side Gallery (Grid)</a><a class="dropdown-item" href="portfolio-single-side-gallery-list.html">Project Side Gallery (List)</a><a class="dropdown-item" href="portfolio-single-carousel.html">Project Carousel</a><a class="dropdown-item" href="portfolio-single-wide-gallery.html">Project Wide Gallery</a>
                    </div>
                    <div class="dropdown-column mb-2 mb-lg-0">
                      <h5 class="dropdown-header">Shop</h5><a class="dropdown-item" href="shop-ls.html">Grid Left Sidebar</a><a class="dropdown-item" href="shop-rs.html">Grid Right Sidebar</a><a class="dropdown-item" href="shop-ns.html">Grid No Sidebar</a><a class="dropdown-item" href="shop-single.html">Single Product</a><a class="dropdown-item" href="checkout.html">Cart &amp; Checkout</a><a class="dropdown-item" href="order-tracking.html">Order Tracking</a>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Account</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Dashboard</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="dashboard-orders.html">Orders</a></li>
                        <li><a class="dropdown-item" href="dashboard-sales.html">Sales</a></li>
                        <li><a class="dropdown-item" href="dashboard-messages.html">Messages</a></li>
                        <li><a class="dropdown-item" href="dashboard-followers.html">Followers</a></li>
                        <li><a class="dropdown-item" href="dashboard-reviews.html">Reviews</a></li>
                        <li><a class="dropdown-item" href="dashboard-favorites.html">Favorites</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Account Settings</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="account-profile.html">Profile Info</a></li>
                        <li><a class="dropdown-item" href="account-payment.html">Payment Methods</a></li>
                        <li><a class="dropdown-item" href="account-notifications.html">Notifications</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-item" href="signin-illustration.html">Sign In - Illustration</a></li>
                    <li><a class="dropdown-item" href="signin-image.html">Sign In - Image</a></li>
                    <li><a class="dropdown-item" href="signin-signup.html">Sign In - Sign Up</a></li>
                    <li><a class="dropdown-item" href="password-recovery.html">Password Recovery</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="about.html">About</a></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Contacts</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="contacts-v1.html">Contacts v.1</a></li>
                        <li><a class="dropdown-item" href="contacts-v2.html">Contacts v.2</a></li>
                        <li><a class="dropdown-item" href="contacts-v3.html">Contacts v.3</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Help Center</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="help-topics.html">Help Topics</a></li>
                        <li><a class="dropdown-item" href="help-single-topic.html">Single Topic</a></li>
                        <li><a class="dropdown-item" href="help-submit-request.html">Submit a Request</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">404 Not Found</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="404-simple.html">Simple Text</a></li>
                        <li><a class="dropdown-item" href="404-illustration.html">Illustration</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Coming Soon</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="coming-soon-image.html">Image</a></li>
                        <li><a class="dropdown-item" href="coming-soon-illustration.html">Illustration</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Docs / UI Kit</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="docs/dev-setup.html">
                        <div class="d-flex align-items-center">
                          <div class="fs-xl text-muted"><i class="ai-file-text"></i></div>
                          <div class="ps-3"><span class="d-block text-heading">Documentation</span><small class="d-block text-muted">Kick-start customization</small></div>
                        </div></a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="components/typography.html">
                        <div class="d-flex align-items-center">
                          <div class="fs-xl text-muted"><i class="ai-layers"></i></div>
                          <div class="ps-3"><span class="d-block text-heading">UI Kit<span class="badge bg-danger ms-2">50+</span></span><small class="d-block text-muted">Flexible components</small></div>
                        </div></a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="docs/changelog.html">
                        <div class="d-flex align-items-center">
                          <div class="fs-xl text-muted"><i class="ai-edit"></i></div>
                          <div class="ps-3"><span class="d-block text-heading">Changelog<span class="badge bg-success ms-2">v2.0.0</span></span><small class="d-block text-muted">Regular updates</small></div>
                        </div></a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="mailto:support@createx.studio">
                        <div class="d-flex align-items-center">
                          <div class="fs-xl text-muted"><i class="ai-life-buoy"></i></div>
                          <div class="ps-3"><span class="d-block text-heading">Support</span><small class="d-block text-muted">support@createx.studio</small></div>
                        </div></a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>
      <!-- Page content-->
      <!-- Hero-->
      <section class="jarallax bg-dark pt-5 pt-lg-7 pb-7" data-jarallax data-speed="0.3">
        <div class="jarallax-img" style="background-image: url(img/demo/web-studio/cubes-bg.jpg);"></div>
        <div class="shape shape-bottom shape-curve bg-body">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
            <path fill="currentColor" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path>
          </svg>
        </div>
        <!-- Text-->
        <div class="container position-relative zindex-5 text-center pt-6 pt-lg-7">
          <h2 class="fs-xl fw-normal text-light">Award winning web design agency</h2>
          <h1 class="text-light">Get your website done</h1>
        </div>
        <div class="d-block d-sm-none" style="height: 100px;"></div>
        <div class="d-none d-sm-block d-lg-none" style="height: 300px;"></div>
        <div class="d-none d-lg-block" style="height: 400px;"></div>
      </section>
      <!-- Featured Projects (carousel)-->
      <section class="container position-relative zindex-5">
        <div class="d-block d-sm-none" style="margin-top: -160px;"></div>
        <div class="d-none d-sm-block d-lg-none" style="margin-top: -360px;"></div>
        <div class="d-none d-lg-block" style="margin-top: -450px;"></div>
        <div class="frame-browser border-light tns-carousel-wrapper mx-auto" style="max-width: 915px;">
          <div class="frame-browser-toolbar">
            <div class="text-nowrap me-3"><span class="frame-browser-button bg-danger"></span><span class="frame-browser-button bg-warning"></span><span class="frame-browser-button bg-success"></span></div><span class="tns-carousel-label fs-sm text-light opacity-75">https://mobileapp.com</span>
          </div>
          <div class="frame-browser-body">
            <div class="tns-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;controls&quot;: false, &quot;nav&quot;: false, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 6000}">
              <div data-carousel-label="https://mobileapp.com"><img class="rounded" src="img/demo/web-studio/slider/01.jpg" alt="Screenshot"></div>
              <div data-carousel-label="https://bookingapp.com"><img class="rounded" src="img/demo/web-studio/slider/02.jpg" alt="Screenshot"></div>
              <div data-carousel-label="https://creativeagency.com"><img class="rounded" src="img/demo/web-studio/slider/03.jpg" alt="Screenshot"></div>
            </div>
          </div>
          <div class="tns-carousel-pager pt-4 text-nowrap text-center mt-2 mb-n2">
            <button class="active" data-nav data-goto="1"></button>
            <button data-nav data-goto="2"></button>
            <button data-nav data-goto="3"></button>
          </div>
        </div>
      </section>
      <!-- Services-->
      <section class="container pt-5 pt-lg-6">
        <h2 class="text-center">What we offer</h2>
        <p class="text-center text-muted mb-0">We provide wide range of services in web design and development</p>
        <!-- RWD Service-->
        <div class="row align-items-center border-bottom py-5">
          <div class="col-md-6 py-3"><img class="d-block mx-auto" src="img/demo/web-studio/services/01.svg" alt="Responsive Web Design"></div>
          <div class="col-xl-4 col-lg-5 col-md-6 offset-lg-1 py-3">
            <h3 class="h4 mb-4">Responsive Web Design</h3>
            <ul class="list-unstyled">
              <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>Gathering user data, creating user flow chart, building wireframes</span></li>
              <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>Website UI / UX design for desktop and handheld devices</span></li>
              <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>Converting design mockups into responsive HTML based websites</span></li>
            </ul>
            <h4 class="h6 pt-2 mb-1">Tools and technologies:</h4>
            <p class="pb-1">Sketch, Figma, Photoshop, HTML, CSS, JS</p><a class="fw-medium" href="#">Get a quote<i class="ai-chevron-right fs-xl ms-1 align-middle"></i></a>
          </div>
        </div>
        <!-- Web Dev Service-->
        <div class="row align-items-center border-bottom py-5">
          <div class="col-md-6 offset-lg-1 py-3 order-md-2"><img class="d-block mx-auto" src="img/demo/web-studio/services/02.svg" alt="Web Development"></div>
          <div class="col-xl-4 col-lg-5 col-md-6 offset-xl-1 py-3 order-md-1">
            <h3 class="h4 mb-4">Web Development (Software)</h3>
            <ul class="list-unstyled">
              <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>Building dynamic webstise and web applications with latest technologies</span></li>
              <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>Front-end and Back-end development</span></li>
              <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>Integration with popular CMS (WordPress, Drupal, Joomla)</span></li>
            </ul>
            <h4 class="h6 pt-2 mb-1">Tools and technologies:</h4>
            <p class="pb-1">PHP, Node.js, SQL, React.js, Vue.js, GraphQL</p><a class="fw-medium" href="#">Get a quote<i class="ai-chevron-right fs-xl ms-1 align-middle"></i></a>
          </div>
        </div>
        <!-- Mobile Dev Service-->
        <div class="row align-items-center border-bottom py-5">
          <div class="col-md-6 py-3"><img class="d-block mx-auto" src="img/demo/web-studio/services/03.svg" alt="Mobile Apps Development"></div>
          <div class="col-xl-4 col-lg-5 col-md-6 offset-lg-1 py-3">
            <h3 class="h4 mb-4">Mobile Apps Development</h3>
            <ul class="list-unstyled">
              <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>Mobile apps UI design</span></li>
              <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>Hybrid mobile apps development</span></li>
              <li class="d-flex mb-2 pb-1"><i class="ai-check-circle text-success fs-xl mt-1 me-3"></i><span>Native mobile apps development</span></li>
            </ul>
            <h4 class="h6 pt-2 mb-1">Tools and technologies:</h4>
            <p class="pb-1">React native, Flutter, Java, Swift</p><a class="fw-medium" href="#">Get a quote<i class="ai-chevron-right fs-xl ms-1 align-middle"></i></a>
          </div>
        </div>
      </section>
      <!-- Portfolio-->
      <section class="container overflow-hidden pt-5 pt-md-6 pt-lg-7 pb-4 pb-md-2">
        <h2 class="text-center pt-4 pt-md-0">Our work</h2>
        <p class="text-center text-muted pb-4">Most recent projects we have completed</p>
        <div class="masonry-filterable mb-3">
          <!-- Portfolio nav (Filters)-->
          <ul class="masonry-filters nav nav-tabs justify-content-center pb-4">
            <li class="nav-item"><a class="nav-link active" href="#" data-group="all">All</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-group="web">Web</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-group="mobile">Mobile</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-group="identity">Identity</a></li>
          </ul>
          <!-- Portfolio grid-->
          <div class="masonry-grid" data-columns="3">
            <div class="masonry-grid-item" data-groups="[&quot;web&quot;]"><a class="card card-hover border-0 shadow" href="portfolio-single-carousel.html"><img class="card-img-top" src="img/portfolio/01.jpg" alt="Portfolio thumb">
                <div class="card-body text-center">
                  <h3 class="h5 nav-heading mb-2">Landing Page Design</h3>
                  <p class="fs-sm text-muted mb-2">UI / UX Design, Web Development</p>
                </div></a></div>
            <div class="masonry-grid-item" data-groups="[&quot;web&quot;]"><a class="card card-hover border-0 shadow" href="portfolio-single-carousel.html"><img class="card-img-top" src="img/portfolio/02.jpg" alt="Portfolio thumb">
                <div class="card-body text-center">
                  <h3 class="h5 nav-heading mb-2">Corporate Website Design</h3>
                  <p class="fs-sm text-muted mb-2">Web Design</p>
                </div></a></div>
            <div class="masonry-grid-item" data-groups="[&quot;identity&quot;]"><a class="card card-hover border-0 shadow" href="portfolio-single-carousel.html"><img class="card-img-top" src="img/portfolio/03.jpg" alt="Portfolio thumb">
                <div class="card-body text-center">
                  <h3 class="h5 nav-heading mb-2">Surfing Portal Logo Design</h3>
                  <p class="fs-sm text-muted mb-2">Identity Design</p>
                </div></a></div>
            <div class="masonry-grid-item" data-groups="[&quot;web&quot;]"><a class="card card-hover border-0 shadow" href="portfolio-single-carousel.html"><img class="card-img-top" src="img/portfolio/04.jpg" alt="Portfolio thumb">
                <div class="card-body text-center">
                  <h3 class="h5 nav-heading mb-2">Cartzilla - Fashion Store</h3>
                  <p class="fs-sm text-muted mb-2">E-commerce Development</p>
                </div></a></div>
            <div class="masonry-grid-item" data-groups="[&quot;mobile&quot;]"><a class="card card-hover border-0 shadow" href="portfolio-single-carousel.html"><img class="card-img-top" src="img/portfolio/05.jpg" alt="Portfolio thumb">
                <div class="card-body text-center">
                  <h3 class="h5 nav-heading mb-2">Mobile App Icon Design</h3>
                  <p class="fs-sm text-muted mb-2">Mobile App Design</p>
                </div></a></div>
            <div class="masonry-grid-item" data-groups="[&quot;web&quot;]"><a class="card card-hover border-0 shadow" href="portfolio-single-carousel.html"><img class="card-img-top" src="img/portfolio/06.jpg" alt="Portfolio thumb">
                <div class="card-body text-center">
                  <h3 class="h5 nav-heading mb-2">Auto Reseller Website</h3>
                  <p class="fs-sm text-muted mb-2">UI / UX Design, Web Development</p>
                </div></a></div>
          </div>
        </div>
        <div class="text-center"><a class="btn btn-primary" href="#">See More Projects</a></div>
      </section>
      <!-- Testimonials-->
      <section class="bg-secondary mt-5 mt-md-6 mt-lg-7">
        <div class="container py-5 py-md-6 py-lg-7">
          <div class="row tns-carousel-wrapper py-3 py-md-0">
            <div class="col-md-8">
              <h2 class="pb-2 mb-4 text-center text-md-start">Testimonials</h2>
              <div class="tns-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;gutter&quot;: 20}">
                <blockquote class="blockquote mt-3 mb-0">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                  <p>Mattis enim ut tellus elementum sagittis vitae et leo duis.</p>
                  <footer class="d-flex align-items-center"><img class="rounded-circle" src="img/testimonials/01.jpg" alt="Emma Brown" width="42">
                    <div class="text-heading fs-md fw-medium ps-2 ms-1">Emma Brown</div>
                  </footer>
                </blockquote>
                <blockquote class="blockquote mt-3 mb-0">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                  <p>Mattis enim ut tellus elementum sagittis vitae et leo duis.</p>
                  <footer class="d-flex align-items-center"><img class="rounded-circle" src="img/testimonials/03.jpg" alt="Tim Brooks" width="42">
                    <div class="text-heading fs-md fw-medium ps-2 ms-1">Tim Brooks</div>
                  </footer>
                </blockquote>
                <blockquote class="blockquote mt-3 mb-0">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                  <p>Mattis enim ut tellus elementum sagittis vitae et leo duis.</p>
                  <footer class="d-flex align-items-center"><img class="rounded-circle" src="img/testimonials/02.jpg" alt="Sanomi Smith" width="42">
                    <div class="text-heading fs-md fw-medium ps-2 ms-1">Sanomi Smith</div>
                  </footer>
                </blockquote>
                <blockquote class="blockquote mt-3 mb-0">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                  <p>Mattis enim ut tellus elementum sagittis vitae et leo duis.</p>
                  <footer class="d-flex align-items-center"><img class="rounded-circle" src="img/testimonials/04.jpg" alt="Charlie Welch" width="42">
                    <div class="text-heading fs-md fw-medium ps-2 ms-1">Charlie Welch</div>
                  </footer>
                </blockquote>
                <blockquote class="blockquote mt-3 mb-0">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                  <p>Mattis enim ut tellus elementum sagittis vitae et leo duis.</p>
                  <footer class="d-flex align-items-center"><img class="rounded-circle" src="img/testimonials/05.jpg" alt="Sarah Palson" width="42">
                    <div class="text-heading fs-md fw-medium ps-2 ms-1">Sarah Palson</div>
                  </footer>
                </blockquote>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 offset-lg-1">
              <div class="tns-carousel-pager d-flex flex-wrap flex-md-column justify-content-center align-items-center align-items-md-start border-start pt-4 mt-4 ps-md-3 pt-md-0 mt-md-0"><a class="swap-image active mx-4 my-3 my-md-4" href="#" data-goto="1"><img class="swap-to" src="img/demo/gadget-landing/logos/01_color.png" alt="Logo" width="136"><img class="swap-from" src="img/demo/gadget-landing/logos/01_gray.png" alt="Logo" width="136"></a><a class="swap-image mx-4 my-3 my-md-4" href="#" data-goto="2"><img class="swap-to" src="img/demo/gadget-landing/logos/02_color.png" alt="Logo" width="130"><img class="swap-from" src="img/demo/gadget-landing/logos/02_gray.png" alt="Logo" width="130"></a><a class="swap-image mx-4 my-3 my-md-4" href="#" data-goto="3"><img class="swap-to" src="img/demo/gadget-landing/logos/05_color.png" alt="Logo" width="114"><img class="swap-from" src="img/demo/gadget-landing/logos/05_gray.png" alt="Logo" width="114"></a><a class="swap-image mx-4 my-3 my-md-4" href="#" data-goto="4"><img class="swap-to" src="img/demo/gadget-landing/logos/03_color.png" alt="Logo" width="103"><img class="swap-from" src="img/demo/gadget-landing/logos/03_gray.png" alt="Logo" width="103"></a><a class="swap-image mx-4 my-3 my-md-4" href="#" data-goto="5"><img class="swap-to" src="img/demo/gadget-landing/logos/04_color.png" alt="Logo" width="143"><img class="swap-from" src="img/demo/gadget-landing/logos/04_gray.png" alt="Logo" width="143"></a></div>
            </div>
          </div>
        </div>
      </section>
      <!-- Blog-->
      <section class="container py-5 py-md-6 py-lg-7 mb-4 mb-md-0">
        <h2 class="mb-5 mt-3 mt-md-0 text-center">From the blog</h2>
        <div class="tns-carousel-wrapper">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 16},&quot;850&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 16}, &quot;1100&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 23}}}">
            <!-- Article-->
            <div class="pb-2">
              <article class="card card-hover h-100 pt-4 pb-5 mx-1"><span class="badge badge-lg badge-floating badge-floating-end bg-success">New</span>
                <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">Identity design</a>
                  <h3 class="h4 nav-heading mb-4"><a href="#">Top 5 Secrets of Making Successful Corporate Identity Design</a></h3>
                </div>
                <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle" src="img/testimonials/02.jpg" alt="Sanomi Smith" width="42">
                    <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Sanomi Smith</span></div></a>
                  <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Feb 12</a></div>
                </div>
              </article>
            </div>
            <!-- Article-->
            <div class="pb-2">
              <article class="card card-hover h-100 pt-4 pb-5 mx-1">
                <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">CMS</a>
                  <h3 class="h4 nav-heading mb-4"><a href="#">List of Excellent Learning Management Systems</a></h3>
                </div>
                <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle" src="img/testimonials/03.jpg" alt="Tim Brooks" width="42">
                    <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Tim Brooks</span></div></a>
                  <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Jan 27</a></div>
                </div>
              </article>
            </div>
            <!-- Article-->
            <div class="pb-2">
              <article class="card card-hover h-100 pt-4 pb-5 mx-1">
                <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">Web development</a>
                  <h3 class="h4 nav-heading mb-4"><a href="#">Build Complete Websites in a Fraction of Time With This Handy Tool</a></h3>
                </div>
                <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle" src="img/testimonials/04.jpg" alt="Charlie Welch" width="42">
                    <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Charlie Welch</span></div></a>
                  <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Jan 15</a></div>
                </div>
              </article>
            </div>
            <!-- Article-->
            <div class="pb-2">
              <article class="card card-hover h-100 pt-4 pb-5 mx-1">
                <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link fs-sm mb-2" href="#">Project management</a>
                  <h3 class="h4 nav-heading mb-4"><a href="#">What You Can Learn About Managing Projects</a></h3>
                </div>
                <div class="px-4 px-xl-5 pt-2"><a class="d-flex meta-link fs-sm align-items-center" href="#"><img class="rounded-circle" src="img/testimonials/07.jpg" alt="Sarah Palson" width="42">
                    <div class="ps-2 ms-1 mt-n1">by<span class="fw-semibold ms-1">Sarah Palson</span></div></a>
                  <div class="mt-3 text-end text-nowrap"><a class="meta-link fs-xs" href="#"><i class="ai-calendar me-1 mt-n1"></i>&nbsp;Dec 19</a></div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>


                <?php $__env->stopSection(); ?>  

<?php echo $__env->make('valexo.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OSPanel\DEVELOPMENT\VALEXO\lite\views/valexo/main.blade.php ENDPATH**/ ?>