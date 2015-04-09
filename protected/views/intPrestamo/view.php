<?php
/* @var $this IntPrestamoController */
/* @var $model ModelIntPrestamo */

$this->breadcrumbs=array(
	'Model Int Prestamos'=>array('index'),
	$model->id_int_prestamo,
);

$this->menu=array(
	array('label'=>'List ModelIntPrestamo', 'url'=>array('index')),
	array('label'=>'Create ModelIntPrestamo', 'url'=>array('create')),
	array('label'=>'Update ModelIntPrestamo', 'url'=>array('update', 'id'=>$model->id_int_prestamo)),
	array('label'=>'Delete ModelIntPrestamo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_int_prestamo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModelIntPrestamo', 'url'=>array('admin')),
);
?>

<h1>View ModelIntPrestamo #<?php echo $model->id_int_prestamo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_int_prestamo',
		'monto',
		'monto_cancelado',
		'prestamos_id_prestamos',
	),
)); ?>
