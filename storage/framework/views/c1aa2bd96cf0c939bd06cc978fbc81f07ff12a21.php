
<?php $__env->startSection('content'); ?>
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-fluid">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="file"></i></div>
                            <?php echo e(__('messages.settings')); ?> : <?php echo e($daterus); ?> -  <span id="clock"><?php echo e(__('admin.clock')); ?></span>
                        </h1>
                    </div>
                    <!--div class="col-12 col-xl-auto mb-3">Optional page header content</div-->
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header"><?php echo e(__('messages.settings')); ?></div>
                <div class="card-body">
                     <?php $__env->slot('header'); ?> 
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            <?php echo e(__('messages.category')); ?>

                        </h2>
                     <?php $__env->endSlot(); ?>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="main-tab" data-toggle="tab" href="?main" role="tab" aria-controls="main" aria-selected="true">Основное</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="seo-tab" data-toggle="tab" href="#seo" role="tab" aria-controls="seo" aria-selected="true">SEO</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="language-tab" data-toggle="tab" href="#language" role="tab" aria-controls="language" aria-selected="false">Язык</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="alert-tab" data-toggle="tab" href="#alert" role="tab" aria-controls="alert" aria-selected="false">Оповещения</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="access-tab" data-toggle="tab" href="#access" role="tab" aria-controls="access" aria-selected="false">Доступ</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="emailTemplates-tab" data-toggle="tab" href="#emailTemplates" role="tab" aria-controls="emailTemplates" aria-selected="false">Email шаблоны</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="watermark-tab" data-toggle="tab" href="#watermark" role="tab" aria-controls="watermark" aria-selected="false">Watermark</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="siteMessage-tab" data-toggle="tab" href="#siteMessage" role="tab" aria-controls="siteMessage" aria-selected="false">Сообщения сайта</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="subscribe-tab" data-toggle="tab" href="#subscribe" role="tab" aria-controls="subscribe" aria-selected="false">Рассылка</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="maps-tab" data-toggle="tab" href="#maps" role="tab" aria-controls="maps" aria-selected="false">Карты</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="main" role="tabpanel" aria-labelledby="main-tab">
                            <br>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1">Toggle this custom switch element</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                    <label class="custom-control-label" for="customSwitch3">Toggle this custom switch element with custom colors danger/success</label>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tab">
                        SEO
                        </div>
                        <div class="tab-pane fade" id="language" role="tabpanel" aria-labelledby="language-tab">
                        Язык
                        </div>
                        <div class="tab-pane fade" id="alert" role="tabpanel" aria-labelledby="alert-tab">
                        Оповещения
                        </div>
                        <div class="tab-pane fade" id="access" role="tabpanel" aria-labelledby="access-tab">
                            Доступ
                        </div>
                        <div class="tab-pane fade" id="emailTemplates" role="tabpanel" aria-labelledby="emailTemplates-tab">
                            Email шаблоны
                        </div>
                        <div class="tab-pane fade" id="watermark" role="tabpanel" aria-labelledby="watermark-tab">
                            Watermark
                        </div>
                        <div class="tab-pane fade" id="siteMessage" role="tabpanel" aria-labelledby="siteMessage-tab">
                            Сообщения сайта
                        </div>
                        <div class="tab-pane fade" id="subscribe" role="tabpanel" aria-labelledby="subscribe-tab">
                            Рассылка
                        </div>
                        <div class="tab-pane fade" id="maps" role="tabpanel" aria-labelledby="maps-tab">
                            Карты
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OSPanel\DEVELOPMENT\VALEXO\lite\admin/settings/main.blade.php ENDPATH**/ ?>