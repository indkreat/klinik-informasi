<?php
/* @var $this PegawaiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pegawai',
);

$this->menu=array(
	array('label'=>'Create Pegawai', 'url'=>array('create')),
	array('label'=>'Manage Pegawai', 'url'=>array('admin'), 'visible'=>Yii::app()->user->getState('role') === 'admin'),
);
?>

<h1>Pegawai</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
