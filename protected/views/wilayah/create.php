<?php
/* @var $this WilayahController */
/* @var $model Wilayah */

$this->breadcrumbs=array(
	'Wilayah'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Wilayah', 'url'=>array('index')),
	array('label'=>'Manage Wilayah', 'url'=>array('admin'), 'visible'=>Yii::app()->user->getState('role') === 'admin'),
);
?>

<h1>Create Wilayah</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>