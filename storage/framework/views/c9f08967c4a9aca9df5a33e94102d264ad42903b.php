<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


  <title><?php echo e(config('app.name', 'Laravel')); ?></title>



	<!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
   <link href="<?php echo e(mix('access/css/app.css')); ?>" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('assets/img/favicon.png')); ?>" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>

</head>

<body class="bg-primary">
		<div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
			<?php echo $__env->yieldContent('content'); ?>
                </main>
            </div>
		</div>


  <!-- Bootstrap core JavaScript-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo e(mix('access/js/app.js')); ?>" ></script>
</body>

</html>
<?php /**PATH E:\OSPanel\DEVELOPMENT\VALEXO\lite\admin/auth/layouts/auth.blade.php ENDPATH**/ ?>