<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Around | Web Studio</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Around - Multipurpose Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, consulting, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, multipurpose, product landing, shop, software, ui kit, web studio, landing, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <!-- Page loading styles-->
    <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        font-weight: normal;
        color: #737491;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #766df4;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes  spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      
    </style>
    <!-- Page loading scripts-->
    <script>
      (function () {
        window.onload = function () {
          var preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 2000);
        };
      })();
      
    </script>
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="<?php echo e(asset('vendor/simplebar/dist/simplebar.min.css')); ?>"/>
    <link rel="stylesheet" media="screen" href="<?php echo e(asset('vendor/tiny-slider/dist/tiny-slider.css')); ?>"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="<?php echo e(asset('css/theme.min.css')); ?>">
    <link rel="stylesheet" media="screen" href="<?php echo e(mix('css/app.css')); ?>">
    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
  </head>
  <!-- Body-->
  <body>
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Page loading spinner-->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div>
    <main class="page-wrapper">
      <?php echo $__env->yieldContent('content'); ?>
    </main>
    <!-- Footer-->
    <footer class="footer jarallax bg-dark pt-5 pt-md-6 pt-lg-7" data-jarallax data-speed="0.3">
      <div class="jarallax-img" style="background-image: url(<?php echo e(asset('img/demo/web-studio/cubes-bg.jpg')); ?>);"></div>
      <div class="container pt-3 pt-md-0">
        <div class="row pb-2">
          <form class="col-xl-6 col-lg-7 col-md-7 needs-validation mb-5" novalidate>
            <h2 class="text-light pb-4">What project are you looking for?</h2>
            <h3 class="h6 pb-2 text-light">Services</h3>
            <div class="btn-group-toggle pb-3 mb-3" data-bs-toggle="buttons">
              <label class="btn btn-outline-light me-2 mb-2 active">
                <input class="visually-hidden" type="radio" name="services" id="branding" checked>Branding
              </label>
              <label class="btn btn-outline-light me-2 mb-2">
                <input class="visually-hidden" type="radio" name="services" id="ux">UI/UX
              </label>
              <label class="btn btn-outline-light me-2 mb-2">
                <input class="visually-hidden" type="radio" name="services" id="web">Web
              </label>
              <label class="btn btn-outline-light mb-2">
                <input class="visually-hidden" type="radio" name="services" id="mobile">Mobile
              </label>
            </div>
            <div class="input-group mb-3"><i class="ai-user position-absolute top-50 start-0 translate-middle-y ms-3"></i>
              <input class="form-control rounded" type="text" placeholder="Name" required>
            </div>
            <div class="input-group mb-3"><i class="ai-mail position-absolute top-50 start-0 translate-middle-y ms-3"></i>
              <input class="form-control rounded" type="email" placeholder="Email" required>
            </div>
            <div class="mb-3 pb-1">
              <textarea class="form-control" rows="4" placeholder="Project description" required></textarea>
            </div>
            <div class="row pt-2">
              <div class="col-lg-6 col-md-8">
                <button class="btn btn-primary d-block w-100" type="submit">Send Request</button>
              </div>
            </div>
          </form>
          <div class="col-xl-3 col-lg-4 offset-xl-3 offset-lg-1 col-md-5 mb-5">
            <h2 class="text-light pb-2">Contacts</h2>
            <ul class="list-unstyled fs-sm mb-4 pb-2">
              <li><a class="nav-link-style nav-link-light" href="mailto:contact@example.com">contact@example.com</a></li>
              <li><a class="nav-link-style nav-link-light" href="tel:+15262200459">+ 1 526 220 0459</a></li>
            </ul>
            <h3 class="h6 pb-2 text-light">Or connect with us on:</h3><a class="btn-social bs-facebook bs-light bs-lg me-2 mb-2" href="#"><i class="ai-facebook"></i></a><a class="btn-social bs-twitter bs-light bs-lg me-2 mb-2" href="#"><i class="ai-twitter"></i></a><a class="btn-social bs-instagram bs-light bs-lg me-2 mb-2" href="#"><i class="ai-instagram"></i></a><a class="btn-social bs-dribbble bs-light bs-lg me-2 mb-2" href="#"><i class="ai-dribbble"></i></a><a class="btn-social bs-behance bs-light bs-lg me-2 mb-2" href="#"><i class="ai-behance"></i></a>
          </div>
        </div>
        <p class="fs-sm text-center pb-4 mt-n1 mb-0"><span class="text-light opacity-50 me-1">© All rights reserved. Made by</span><a class="nav-link-style nav-link-light" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></p>
      </div>
    </footer>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll data-fixed-element><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ai-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap5.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/simplebar/dist/simplebar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/tiny-slider/dist/min/tiny-slider.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/jarallax/dist/jarallax.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/imagesloaded/imagesloaded.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/shufflejs/dist/shuffle.min.js')); ?>"></script>
    <!-- Main theme script-->
    <script src="<?php echo e(asset('js/theme.min.js')); ?>"></script>
    <script src="<?php echo e(mix('js/app.js')); ?>"></script>
  </body>
</html><?php /**PATH E:\OSPanel\DEVELOPMENT\VALEXO\lite\views/valexo/layouts/app.blade.php ENDPATH**/ ?>