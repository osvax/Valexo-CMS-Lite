<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    
    <meta charset="utf-8" />
    
    <title> <?php echo $__env->yieldContent('title_prefix', config('valexo.title_prefix', '')); ?> <?php echo $__env->yieldContent('title', config('valexo.title', 'Valexo CMS Lite')); ?><?php echo $__env->yieldContent('title_postfix', config('valexo.title_postfix', '')); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <base href="http://valexocms.lite/">
    <meta name="description" content="" />
    <meta name="author" content="" />
    
    <?php if(config('valexo.use_ico_only')): ?>
        <link rel="shortcut icon" href="<?php echo e(asset('access/img/favicons/favicon.ico')); ?>" />
    <?php elseif(config('valexo.use_full_favicon')): ?>
        <link rel="shortcut icon" href="<?php echo e(asset('access/img/favicons/favicon.ico')); ?>" />
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(asset('access/img/favicons/apple-icon-57x57.png')); ?>">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo e(asset('access/img/favicons/apple-icon-60x60.png')); ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(asset('access/img/favicons/apple-icon-72x72.png')); ?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('access/img/favicons/apple-icon-76x76.png')); ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(asset('access/img/favicons/apple-icon-114x114.png')); ?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(asset('access/img/favicons/apple-icon-120x120.png')); ?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(asset('access/img/favicons/apple-icon-144x144.png')); ?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('access/img/favicons/apple-icon-152x152.png')); ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('access/img/favicons/apple-icon-180x180.png')); ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('access/img/favicons/favicon-16x16.png')); ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('access/img/favicons/favicon-32x32.png')); ?>">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(asset('access/img/favicons/favicon-96x96.png')); ?>">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo e(asset('access/img/favicons/android-icon-192x192.png')); ?>">
        <link rel="manifest" href="<?php echo e(asset('access/img/favicons/manifest.json')); ?>">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo e(asset('access/img/favicon/ms-icon-144x144.png')); ?>">
    <?php endif; ?>

    
    <?php echo $__env->yieldPushContent('styles_before'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/sweetalert2/dist/sweetalert2.min.css')); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo e(asset('vendor/toastr/toastr.min.css')); ?>">
    
    <?php if(config('valexo.livewire')): ?>
        <?php if(app()->version() >= 7): ?>
            <?php echo \Livewire\Livewire::styles(); ?>

        <?php else: ?>
            <?php echo \Livewire\Livewire::styles(); ?>

        <?php endif; ?>
    <?php endif; ?>
    
    <?php if(!config('valexo.enabled_laravel_mix')): ?>
        
        <?php echo $__env->yieldPushContent('styles'); ?>
        <link rel="stylesheet" href="<?php echo e(asset('access/css/app.css')); ?>">
        <?php echo $__env->yieldPushContent('styles_after'); ?>
    <?php else: ?>
        
        <?php echo $__env->yieldPushContent('styles'); ?>
        <link rel="stylesheet" href="<?php echo e(mix(config('valexo.laravel_mix_css_path', 'access/css/app.css'))); ?>">
        <?php echo $__env->yieldPushContent('styles_after'); ?>
    <?php endif; ?>
</head>
<body <?php if(config('valexo.body_class')): ?> class="<?php echo e(config('valexo.body_class')); ?>" <?php endif; ?>>

<div class="wrapper">
    <?php echo $__env->make('navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">

            <?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>


        <div id="layoutSidenav_content">
            <main>

                <?php echo $__env->yieldContent('content'); ?>

            </main>
            <footer class="footer mt-auto footer-light">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &#xA9; Your Website <?php echo e(date('Y')); ?></div>
                        <div class="col-md-6 text-md-right small">
                            <a href="starter-default.html#!">Privacy Policy</a>
                            &#xB7;
                            <a href="starter-default.html#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--/div-->

    <?php echo $__env->yieldPushContent('scripts_before'); ?>
<!-- версия для разработки, отображает полезные предупреждения в консоли -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/sweetalert2/dist/sweetalert2.all.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/toastr/toastr.min.js')); ?>"></script>

    
    <?php if(config('valexo.livewire')): ?>
        <?php if(app()->version() >= 7): ?>
            <?php echo \Livewire\Livewire::scripts(); ?>

        <?php else: ?>
            <?php echo \Livewire\Livewire::scripts(); ?>

        <?php endif; ?>
    <?php endif; ?>


    
    <?php if(!config('valexo.enabled_laravel_mix')): ?>
        
        <?php echo $__env->yieldPushContent('scripts'); ?>
        <script src="<?php echo e(mix('access/js/app.js')); ?>"></script>
        <?php echo $__env->yieldPushContent('scripts_after'); ?>
    <?php else: ?>
        
        <?php echo $__env->yieldPushContent('scripts'); ?>
        <script src="<?php echo e(mix(config('valexo.laravel_mix_js_path', 'access/js/app.js'))); ?>"></script>
        <?php echo $__env->yieldPushContent('scripts_after'); ?>
    <?php endif; ?>

    <?php if(config('valexo.cb_customizer')): ?>
        <script src="<?php echo e(asset(access_path_js().'customizer/sb-customizer.js')); ?>"></script>
        <sb-customizer project="sb-admin-pro"></sb-customizer>
    <?php endif; ?>
</div>

</body>
</html>

<?php /**PATH E:\OSPanel\DEVELOPMENT\VALEXO\lite\admin/layouts/app.blade.php ENDPATH**/ ?>