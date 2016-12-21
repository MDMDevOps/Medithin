<?php $this->beginContent('//layouts/empty'); ?>
	<div class="global_wrap app-layouts-clients">
    <div class="global_container_wrap2">
        <div class="global_container2_retrofit container">
            <div class="global_container_content_retrofit">
                <div class="global_menu">
					<?php if(false == $this->menuTopHidden): ?>
						<?php $this->widget(
							'application.components.widgets.wMenuTop.wMenuTop', array(
								'items' => $this->menuItems,
								'mode' => !empty($this->topMenuMode) ? $this->topMenuMode : 'menu'
							)
						); ?>
					<?php endif ?>
                </div>
                <div class="clearfix"></div>

                <div class="global_content">
                    <div id="layout_content"><?php echo $content ?></div>
                    <?php $this->widget('w.wFooterDisclaimer.wFooterDisclaimer', array()); ?>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="global_footer">
            <div>
            <?php $this->widget('application.components.widgets.wFooter.wFooter', array()); ?>
            </div>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>