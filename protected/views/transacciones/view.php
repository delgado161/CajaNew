<?php
/* @var $this TransaccionesController */
/* @var $model ModelTransacciones */

$this->breadcrumbs=array(
	'Model Transacciones'=>array('index'),
	$model->id_transacciones,
);

$this->menu=array(
	array('label'=>'List ModelTransacciones', 'url'=>array('index')),
	array('label'=>'Create ModelTransacciones', 'url'=>array('create')),
	array('label'=>'Update ModelTransacciones', 'url'=>array('update', 'id'=>$model->id_transacciones)),
	array('label'=>'Delete ModelTransacciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_transacciones),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModelTransacciones', 'url'=>array('admin')),
);
?>

<h1>View ModelTransacciones #<?php echo $model->id_transacciones; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_transacciones',
		'monto',
		'pagos_id_pagos',
		'status_id_status',
		'usuarios_id_usuarios',
		'tipo_pago_id_tipo_pago',
	),
)); ?>
