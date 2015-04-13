<?php
/* @var $this TUserExamController */
/* @var $model TUserExam */

$this->breadcrumbs=array(
	'Tuser Exams'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TUserExam', 'url'=>array('index')),
	array('label'=>'Create TUserExam', 'url'=>array('create')),
	array('label'=>'View TUserExam', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TUserExam', 'url'=>array('admin')),
);
?>

<h1>Update TUserExam <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>