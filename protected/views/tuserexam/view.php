<?php
/* @var $this TUserExamController */
/* @var $model TUserExam */

$this->breadcrumbs=array(
	'Tuser Exams'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TUserExam', 'url'=>array('index')),
	array('label'=>'Create TUserExam', 'url'=>array('create')),
	array('label'=>'Update TUserExam', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TUserExam', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TUserExam', 'url'=>array('admin')),
);
?>

<h1>View TUserExam #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_user',
		'id_exam',
		'finish_time',
		'start_time',
		'end_time',
		'is_view_result',
		'create_at',
		'create_by',
		'update_at',
		'update_by',
	),
)); ?>
