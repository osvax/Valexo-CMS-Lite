
<?php $__env->startSection('content'); ?>

    <!-- Main page content-->
    <!-- Custom page header alternative example-->
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-fluid">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="file"></i></div>
                            <?php echo e(__('messages.dashboards')); ?> : <?php echo e($daterus); ?> -  <div id="clock"> <span v-bind:title="clock"></span></div>
                        </h1>
                    </div>
                    <!--div class="col-12 col-xl-auto mb-3">Optional page header content</div-->
                </div>
            </div>
        </div>
    </header>
    <div class="col-12">
       <div class="row">
           <div class="col-xxl-8 col-xl-8 mb-4">
               <div class="card h-100">
                   <div class="card-body h-100 d-flex flex-column justify-content-center py-5 py-xl-4">
                       <div class="row align-items-center">
                           <div class="col-xl-8 col-xxl-12">
                               <div class="text-center text-xl-left text-xxl-center px-4 mb-4 mb-xl-0 mb-xxl-4">
                                   <h1 class="text-primary"><?php echo e(__('messages.welcome_first')); ?></h1>
                                   <p class="text-gray-700 mb-0"><?php echo e(__('messages.welcome_alert')); ?></p>
                               </div>
                           </div>
                           <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid" src="<?php echo e(asset('access/img/illustrations/at-work.svg')); ?>" style="max-width: 26rem"></div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-xxl-4 col-xl-4 mb-4">
               <!-- Pie chart example-->

               <div class="card ">
                   <div class="card-header text-gray-700"><?php echo e(__('messages.alerts')); ?> <i class="fas fa-bell ml-2 text-success"></i></div>
                   <div class="card-body">
                       <div class="alert alert-red alert-solid" role="alert">This is a red alert.</div>
                       <div class="alert alert-green alert-solid" role="alert">This is a green alert.</div>
                       <div class="alert alert-yellow alert-solid" role="alert">This is a yellow alert.</div>
                   </div>
               </div>
           </div>
       </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OSPanel\DEVELOPMENT\VALEXO\lite\admin/main.blade.php ENDPATH**/ ?>