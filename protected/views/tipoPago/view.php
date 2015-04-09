<?php
/* @var $this TipoPagoController */
/* @var $model ModelTipoPago */

$this->breadcrumbs=array(
	'Model Tipo Pagos'=>array('index'),
	$model->id_tipo_pago,
);

$this->menu=array(
	array('label'=>'List ModelTipoPago', 'url'=>array('index')),
	array('label'=>'Create ModelTipoPago', 'url'=>array('create')),
	array('label'=>'Update ModelTipoPago', 'url'=>array('update', 'id'=>$model->id_tipo_pago)),
	array('label'=>'Delete ModelTipoPago', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipo_pago),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModelTipoPago', 'url'=>array('admin')),
);
?>

<h1>View ModelTipoPago #<?php echo $model->id_tipo_pago; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo_pago',
		'tipo',
	),
)); ?>
