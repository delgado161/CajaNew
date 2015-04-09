<?php
/* @var $this PrestamosController */
/* @var $model ModelPrestamos */

$this->breadcrumbs=array(
	'Model Prestamoses'=>array('index'),
	$model->id_prestamos,
);

$this->menu=array(
	array('label'=>'List ModelPrestamos', 'url'=>array('index')),
	array('label'=>'Create ModelPrestamos', 'url'=>array('create')),
	array('label'=>'Update ModelPrestamos', 'url'=>array('update', 'id'=>$model->id_prestamos)),
	array('label'=>'Delete ModelPrestamos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_prestamos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModelPrestamos', 'url'=>array('admin')),
);
?>

<h1>View ModelPrestamos #<?php echo $model->id_prestamos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_prestamos',
		'fecha_solicitud',
		'fecha_aprobacion',
		'cantidad_solicitada',
		'cantidad_aprobada',
		'observacion',
		'motivo',
		'mes_pago',
		'tipo_prestamo',
		'status_id_status',
		'cajita_id_cajita',
	),
)); ?>
