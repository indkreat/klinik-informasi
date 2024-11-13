<?php
/* @var $this PegawaiController */
/* @var $model Pegawai */

$this->breadcrumbs=array(
	'Pegawai'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pegawai', 'url'=>array('index')),
	array('label'=>'Manage Pegawai', 'url'=>array('admin'), 'visible'=>Yii::app()->user->getState('role') === 'admin'),
);
?>

<h1>Create Pegawai</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>