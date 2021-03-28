<nav class="sidenav <?php if(config('valexo.sidebar_class')): ?> <?php echo e(config('valexo.sidebar_class')); ?> <?php endif; ?>">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <!-- Sidenav Menu Heading (Account)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <div class="sidenav-menu-heading d-sm-none">Account</div>
            <!-- Sidenav Link (Alerts)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="starter-default.html#!">
                <div class="nav-link-icon"><i data-feather="bell"></i></div>
                Alerts
                <span class="badge badge-warning-soft text-warning ml-auto">4 New!</span>
            </a>
            <!-- Sidenav Link (Messages)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="starter-default.html#!">
                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                Messages
                <span class="badge badge-success-soft text-success ml-auto">2 New!</span>
            </a>
            <!-- Sidenav Menu Heading (Core)-->
            <div class="sidenav-menu-heading">Core</div>
            <!-- Sidenav Accordion (Dashboard)-->
            <a class="nav-link" href="<?php echo e(route('admin.dashboard.index')); ?>">
                <div class="nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                <?php echo e(__('admin.dashboards')); ?>

            </a>
            <!-- Sidenav Accordion (Ststistic)-->
            <a class="nav-link" href="<?php echo e(route('admin.statistic.index')); ?>">
                <div class="nav-link-icon"><i class="mr-1" data-feather="trending-up"></i></div>
                <?php echo e(__('admin.statistic')); ?>

            </a>
            <!-- Sidenav Link (BLog)-->

            <?php if(Module::find('blog')): ?>

            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="nav-link-icon"><i data-feather="book-open"></i></div>
                <?php echo e(__('admin.blog')); ?>

                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" data-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                    <!-- Nested Sidenav Accordion (Pages -> Account)-->
                    <!-- Sidenav Link (CategorySeeder)-->
                    <a class="nav-link" href="<?php echo e(route('admin.category.index')); ?>">
                        <div class="nav-link-icon"><i class="fas fa-line-columns"></i></div>
                        <?php echo e(__('admin.category')); ?>

                    </a>
                    <!-- Sidenav Link (Articles)-->
                    <a class="nav-link" href="<?php echo e(route('admin.articles.index')); ?>">
                        <div class="nav-link-icon"><i class="fas fa-book-spells"></i></div>
                        <?php echo e(__('admin.articles')); ?>

                    </a>
                </nav>
            </div>
            <?php endif; ?>

            <!-- Sidenav Link (Pages)-->
            <a class="nav-link" href="<?php echo e(route('admin.pages.index')); ?>">
                <div class="nav-link-icon"><i class="fas fa-file"></i></div>
                <?php echo e(__('admin.pages')); ?>

            </a>
            <!-- Sidenav Link (Settings)-->
            <a class="nav-link" href="<?php echo e(route('admin.settings.index')); ?>">
                <div class="nav-link-icon"><i class="fas fa-cogs"></i></div>
                <?php echo e(__('admin.settings')); ?>

            </a>

        </div>
    </div>
    <!-- Sidenav Footer-->
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle"><?php echo e(__('auth.loggedinas')); ?>:</div>
            <div class="sidenav-footer-title"><?php echo e(Auth::user()->name); ?></div>
        </div>
    </div>
</nav>
<?php /**PATH E:\OSPanel\DEVELOPMENT\VALEXO\lite\admin/sidebar.blade.php ENDPATH**/ ?>