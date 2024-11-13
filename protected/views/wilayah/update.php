<?php
/* @var $this WilayahController */
/* @var $model Wilayah */

$this->breadcrumbs=array(
	'Wilayah'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Wilayah', 'url'=>array('index')),
	array('label'=>'Create Wilayah', 'url'=>array('create')),
	array('label'=>'View Wilayah', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Wilayah', 'url'=>array('admin'), 'visible'=>Yii::app()->user->getState('role') === 'admin'),
);
?>

<h1>Update Wilayah <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>