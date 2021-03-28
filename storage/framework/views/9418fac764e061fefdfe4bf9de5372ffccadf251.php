
<?php $__env->startSection('content'); ?>
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-fluid">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="file"></i></div>
                            <?php echo e(__('messages.category')); ?> : <?php echo e($daterus); ?> -  <span id="clock"><?php echo e(__('admin.clock')); ?></span>
                        </h1>
                    </div>
                    <!--div class="col-12 col-xl-auto mb-3">Optional page header content</div-->
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header"><?php echo e(__('messages.category')); ?></div>
                    <div class="card-body ">

                            <ul class="uk-nestable" data-uk-nestable="{handleClass:'uk-nestable-handle,maxDepth:3}">
                                <?php $__currentLoopData = $arrayAllParentCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="uk-nestable-item" id="<?php echo e($cat['id']); ?>">
                                    <div  class="uk-nestable-panel text-left">
                                            <i class="uk-nestable-handle uk-icon uk-icon-bars uk-margin-small-right"></i>
                                        <?php echo e($cat['name']); ?>

                                        <div class="va_custom-control">
                                            <div class="custom-control custom-switch  custom-switch-off-success custom-switch-on-danger">
                                                <input type="checkbox" checked class="custom-control-input" id="customSwitch<?php echo e($cat['id']); ?>">
                                                <label class="custom-control-label" for="customSwitch<?php echo e($cat['id']); ?>"></label>
                                            </div>
                                             <a class="va_fa-pencil-alt-cat" href="#" title="Редактировать категорию <?php echo e($cat['name']); ?>"> <i id="<?php echo e($cat['id']); ?>" class="fas fa-edit va-edit-icon"></i></a>
                                              <i ata-toggle="modal" ata-target="#modal-sm" id="<?php echo e($cat['id']); ?>" class="fas pl-2 deletePage va-delete-icon-cat  fa-trash-alt"></i>

                                        </div>
                                    </div>
                                        <?php if(count($cat->subcategory)): ?>
                                            <?php echo $__env->make('blog::category.subcat',['subcategories' => $cat->subcategory], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php endif; ?>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>


                    </div>

                </div>
                <hr>
                <div class="form-group mt-3">
                    <a  class="btn btn-primary "  href="<?php echo e(route('admin.pages.create')); ?>">Создать страницу</a>
                </div>
            </div>


            <!--div-- class="col-sm-12">
                <div class="card">
                    <div class="card-header">{ __('messages.category') }}</div>
                    <div class="card-body">
                        <div class="myadmin-dd-empty dd" id="nestable">
                            <ol class="dd-list">
                                foreach($arrayAllParentCategory as $cat)
                                        <li class="dd-item dd3-item" data-id="{ $cat['id'] }}">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content"> { $cat['id'] }}- { $cat['name'] }} </div>
                                            if(count($cat->subcategory))
                                               include('category.subcat',['subcategories' => $cat->subcategory])
                                            endif
                                        </li>
                                endforeach
                            </ol>
                        </div>
                    </div>
                </div>
            </div-->



    <?php $__env->startPush('styles'); ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/uikit/css/uikit.min.css')); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/uikit/css/components/nestable.min.css')); ?>"/>

    <?php $__env->stopPush(); ?>
    <?php $__env->startPush('scripts'); ?>
                    <script type="text/javascript" src="<?php echo e(asset('vendor/uikit/js/core/core.min.js')); ?>"></script>
            <script type="text/javascript" src="<?php echo e(asset('vendor/uikit/js/components/nestable.min.js')); ?>"></script>
            <script type="text/javascript" src="<?php echo e(asset('vendor/uikit/js/uikit.min.js')); ?>"></script>


                    <script>

                function prov() {
                    let select = document.getElementById('exampleFormControlSelect1').options.selectedIndex;
                    let txt= document.getElementById("exampleFormControlSelect1").options[select].text;
                    document.getElementById('exampleFormControlInput1').value = txt;
                }
            </script>
        <script type="text/javascript">

            $(document).ready(function() {

              UIkit.ready(function() {
                    $('.uk-nestable').on({
                        'change.uk.nestable': function(e, el, type){
                          let parentId =  type.parent().parent().attr('id');
                          let id = type.attr('id');

                            if (parentId === undefined) {
                                parentId = 0;
                            }


                            console.log(type.parent().parent().attr('id'));

                            $.ajax({
                                type: "GET",
                                url: "<?php echo e(route('updatesortcategory')); ?>",
                                dataType: "html",
                                data: {id:id,parent_id:parentId},
                                error: function (data) {
                                    toastr.error("Ошибка");
                                },
                                success: function (data) {
                                    toastr.success("Сортировка изменена");
                                    setInterval(window.location.reload(),3000)
                                }
                            });

                        }
                    });
                });


            });
        </script>
    <?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OSPanel\DEVELOPMENT\VALEXO\lite\Modules/Blog\Resources/views/category/main.blade.php ENDPATH**/ ?>