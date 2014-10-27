<div class="cd-panel from-right">
    <header class="cd-panel-header">
        <a href="#0" class="cd-panel-close">Close</a>
    </header>

    <div class="cd-panel-container">
        <div class="cd-panel-content">
            <?php wp_nav_menu(array(
            	'menu' => 'top_menu',
            	'container_class' => 'main-nav',
            	'fallback_cb' => 'dp_nav_fallback',
            	'depth' => 2
            )); ?>
        </div>
    </div>
</div>