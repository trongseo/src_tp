<?php $this->beginContent('//layouts/main'); ?>
<div id="sign-up">
	<?php $this->widget('zii.widgets.CBreadcrumbs', array(
		'homeLink' => CHtml::link($this->lang['default'], (LANGURL) ? LANGURL : Yii::app()->homeUrl),
		'links'=>$this->breadcrumbs,
		'htmlOptions'=>array('class'=>'link'),
		'separator'=>'<img src="'.Yii::app()->theme->baseUrl.'/images/bull.png" alt="Bull" title="Bull" />',
	)); ?><!-- breadcrumbs -->
    <?php echo $content; ?>
</div>
<?php $this->endContent(); ?>