<?php
/* @var $this CajitaController */
/* @var $model ModelCajita */

$this->breadcrumbs=array(
	'Model Cajitas'=>array('index'),
	$model->id_cajita,
);

$this->menu=array(
	array('label'=>'List ModelCajita', 'url'=>array('index')),
	array('label'=>'Create ModelCajita', 'url'=>array('create')),
	array('label'=>'Update ModelCajita', 'url'=>array('update', 'id'=>$model->id_cajita)),
	array('label'=>'Delete ModelCajita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cajita),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModelCajita', 'url'=>array('admin')),
);
?>

<h1>View ModelCajita #<?php echo $model->id_cajita; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cajita',
		'cajas_id_cajas',
		'usuarios_id_usuarios',
	),
)); ?>
