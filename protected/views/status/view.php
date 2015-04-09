<?php
/* @var $this StatusController */
/* @var $model ModelStatus */

$this->breadcrumbs=array(
	'Model Statuses'=>array('index'),
	$model->id_status,
);

$this->menu=array(
	array('label'=>'List ModelStatus', 'url'=>array('index')),
	array('label'=>'Create ModelStatus', 'url'=>array('create')),
	array('label'=>'Update ModelStatus', 'url'=>array('update', 'id'=>$model->id_status)),
	array('label'=>'Delete ModelStatus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_status),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModelStatus', 'url'=>array('admin')),
);
?>

<h1>View ModelStatus #<?php echo $model->id_status; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_status',
		'nombre',
		'descripcion',
	),
)); ?>
