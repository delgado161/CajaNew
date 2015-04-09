<?php
/* @var $this TransaccionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Model Transacciones',
);

$this->menu=array(
	array('label'=>'Create ModelTransacciones', 'url'=>array('create')),
	array('label'=>'Manage ModelTransacciones', 'url'=>array('admin')),
);
?>

<h1>Model Transacciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
