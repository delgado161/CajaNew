<?php
/* @var $this IntMensualidadController */
/* @var $model ModelIntMensualidad */

$this->breadcrumbs=array(
	'Model Int Mensualidads'=>array('index'),
	$model->id_int_mensualidad,
);

$this->menu=array(
	array('label'=>'List ModelIntMensualidad', 'url'=>array('index')),
	array('label'=>'Create ModelIntMensualidad', 'url'=>array('create')),
	array('label'=>'Update ModelIntMensualidad', 'url'=>array('update', 'id'=>$model->id_int_mensualidad)),
	array('label'=>'Delete ModelIntMensualidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_int_mensualidad),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModelIntMensualidad', 'url'=>array('admin')),
);
?>

<h1>View ModelIntMensualidad #<?php echo $model->id_int_mensualidad; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_int_mensualidad',
		'monto',
		'monto_cancelado',
		'cajita_id_cajita',
	),
)); ?>
