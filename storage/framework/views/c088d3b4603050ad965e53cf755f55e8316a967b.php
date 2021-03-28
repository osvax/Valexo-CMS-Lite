<?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <ul class="uk-nestable-list">
    <li class="uk-nestable-item" id="<?php echo e($subcategory['id']); ?>">
        <div class="uk-nestable-panel">
            <i class="uk-nestable-handle uk-icon uk-icon-bars uk-margin-small-right"></i>
            <?php echo e($subcategory['name']); ?>

            <div class="va_custom-control">
                <div class="custom-control custom-switch  custom-switch-off-success custom-switch-on-danger">
                    <input type="checkbox" checked class="custom-control-input" id="customSwitch<?php echo e($subcategory['id']); ?>">
                    <label class="custom-control-label" for="customSwitch<?php echo e($subcategory['id']); ?>"></label>
                </div>
                <a class="va_fa-pencil-alt-cat" href="#" title="Редактировать категорию <?php echo e($cat['name']); ?>"> <i id="<?php echo e($subcategory['id']); ?>" class="fas fa-edit va-edit-icon"></i></a>
                <i ata-toggle="modal" ata-target="#modal-sm" id="<?php echo e($subcategory['id']); ?>" class="fas pl-2 deletePage va-delete-icon-cat  fa-trash-alt"></i>

            </div>
        </div>
            <?php if(count($subcategory->subcategory)): ?>
                <?php echo $__env->make('blog::category.subcat',['subcategories' => $subcategory->subcategory], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
    </li>
    </ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php /**PATH E:\OSPanel\DEVELOPMENT\VALEXO\lite\Modules/Blog\Resources/views/category/subcat.blade.php ENDPATH**/ ?>