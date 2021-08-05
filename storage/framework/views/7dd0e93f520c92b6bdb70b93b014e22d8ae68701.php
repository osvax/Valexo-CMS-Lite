<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <title>elFinder 2.0</title>

        <!-- jQuery and jQuery UI (REQUIRED) -->
        <link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/themes/smoothness/jquery-ui.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

        <!-- elFinder CSS (REQUIRED) -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset($dir . '/css/elfinder.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset($dir . '/css/theme.css')); ?>">

        <!-- elFinder JS (REQUIRED) -->
        <script src="<?php echo e(asset($dir . '/js/elfinder.min.js')); ?>"></script>

        <?php if($locale): ?>
            <!-- elFinder translation (OPTIONAL) -->
            <script src="<?php echo e(asset($dir . "/js/i18n/elfinder.$locale.js")); ?>"></script>
        <?php endif; ?>
        <!-- Include jQuery, jQuery UI, elFinder (REQUIRED) -->

        <script type="text/javascript">
            $().ready(function () {
                var elf = $('#elfinder').elfinder({
                    // set your elFinder options here
                    <?php if($locale): ?>
                        lang: '<?php echo e($locale); ?>', // locale
                    <?php endif; ?>
                    customData: { 
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    url: '<?php echo e(route("elfinder.connector")); ?>',  // connector URL
                    soundPath: '<?php echo e(asset($dir.'/sounds')); ?>',
                    dialog: {width: 900, modal: true, title: 'Select a file'},
                    resizable: false,
                    commandsOptions: {
                        getfile: {
                            oncomplete: 'destroy'
                        }
                    },
                    getFileCallback: function (file) {
                        window.parent.processSelectedFile(file.path, '<?php echo e($input_id); ?>');
                        parent.jQuery.colorbox.close();
                    }
                }).elfinder('instance');
            });
        </script>

    </head>
    <body>

        <!-- Element where elFinder will be created (REQUIRED) -->
        <div id="elfinder"></div>

    </body>
</html>
<?php /**PATH E:\OSPanel\DEVELOPMENT\VALEXO\lite\admin/vendor/elfinder/standalonepopup.blade.php ENDPATH**/ ?>