<?php global $show_template_name;
if ($show_template_name) : ?>
    <div class="template_hint">
        <?php global $template;
        echo basename($template); ?>
    </div>
<?php endif; ?>

<header class="header container-fluid py-2 bg-dark text-white">
    <a class="text-white" href="<?php echo home_url(); ?>">
        <span class="fa fa-home mr-1"></span>
        <span>header logo</span>
    </a>
</header>