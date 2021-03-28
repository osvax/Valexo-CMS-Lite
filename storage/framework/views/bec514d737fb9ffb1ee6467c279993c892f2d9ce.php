<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title><?php echo e(__('messages.404')); ?></title>
        <link href="<?php echo e(asset("access/css/app.css")); ?>" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="<?php echo e(asset("access/img/favicon.png")); ?>" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-white">
        <div id="layoutError">
            <div id="layoutError_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center mt-4">
                                    <img class="img-fluid p-4" src="<?php echo e(asset("access/img/illustrations/404-error.svg")); ?>" alt />
                                    <p class="lead"><?php echo e(__('messages.404')); ?></p>
                                    <a class="text-arrow-icon" href="<?php echo e(route('admin.dashboard.index')); ?>">
                                        <i class="ml-0 mr-1" data-feather="arrow-left"></i>
                                       <?php echo e(__('messages.returndashboard')); ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutError_footer">
                <footer class="footer mt-auto footer-light">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 small">Copyright &#xA9; Your Website 2021</div>
                            <div class="col-md-6 text-md-right small">
                                <a href="error-404-1.html#!">Privacy Policy</a>
                                &#xB7;
                                <a href="error-404-1.html#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    </body>
</html>
<?php /**PATH E:\OSPanel\DEVELOPMENT\VALEXO\lite\admin/errors/404.blade.php ENDPATH**/ ?>