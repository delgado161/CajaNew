<?php
/* @var $this CajasController */
/* @var $model ModelCajas */

$this->breadcrumbs=array(
	'Model Cajases'=>array('index'),
	$model->id_cajas,
);

$this->menu=array(
	array('label'=>'List ModelCajas', 'url'=>array('index')),
	array('label'=>'Create ModelCajas', 'url'=>array('create')),
	array('label'=>'Update ModelCajas', 'url'=>array('update', 'id'=>$model->id_cajas)),
	array('label'=>'Delete ModelCajas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cajas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModelCajas', 'url'=>array('admin')),
);
?>

<h1>View ModelCajas #<?php echo $model->id_cajas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cajas',
		'nombre',
		'monto_inscripcion',
		'monto_mensualidad',
		'int_socios',
		'int_terceros',
		'dia_pago',
		'dias_a_prestamo',
		'numero_cuenta',
		'int_mora_prestamo',
		'int_mensualidad',
		'bancos_id_bancos',
	),
)); ?>
