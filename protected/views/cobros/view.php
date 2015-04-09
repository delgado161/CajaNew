<?php
/* @var $this CobrosController */
/* @var $model ModelCobros */

$this->breadcrumbs=array(
	'Model Cobroses'=>array('index'),
	$model->id_cobros,
);

$this->menu=array(
	array('label'=>'List ModelCobros', 'url'=>array('index')),
	array('label'=>'Create ModelCobros', 'url'=>array('create')),
	array('label'=>'Update ModelCobros', 'url'=>array('update', 'id'=>$model->id_cobros)),
	array('label'=>'Delete ModelCobros', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cobros),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModelCobros', 'url'=>array('admin')),
);
?>

<h1>View ModelCobros #<?php echo $model->id_cobros; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cobros',
		'monto',
		'transacciones_id_transacciones',
		'prestamos_id_prestamos',
	),
)); ?>
